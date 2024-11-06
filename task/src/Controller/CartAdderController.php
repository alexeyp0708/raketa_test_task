<?php

namespace Raketa\BackendTestTask\Controller;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Raketa\BackendTestTask\Domain\CartItem;
use Raketa\BackendTestTask\Infrastructure\JsonResponse;
use Raketa\BackendTestTask\Model\CartModelInterface;
use Raketa\BackendTestTask\Repository\CartManagerRepositoryInterface;
use Raketa\BackendTestTask\Repository\ProductRepositoryInterface;
use Ramsey\Uuid\Uuid;

readonly class CartAdderController
{
    /**
     * @param \Raketa\BackendTestTask\Repository\ProductRepositoryInterface $productRepository
     * @param \Raketa\BackendTestTask\Model\CartModelInterface $cartModel
     * @param \Raketa\BackendTestTask\Repository\CartManagerRepositoryInterface $cartManager
     */
    public function __construct(
        private ProductRepositoryInterface     $productRepository,
        private CartModelInterface             $cartModel,
        private CartManagerRepositoryInterface $cartManager,
    )
    {
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Raketa\BackendTestTask\Repository\ProductExceptionInterface
     */
    public function add(RequestInterface $request): ResponseInterface
    {
        $rawRequest = json_decode($request->getBody()->getContents(), true);
        $product = $this->productRepository->getByUuid($rawRequest['productUuid']);
        $cart = $this->cartManager->getCart();
        $cart->addItem(new CartItem(
            Uuid::uuid4()->toString(),
            $product->getUuid(),
            $product->getPrice(),
            $rawRequest['quantity'],
        ));

        $response = new JsonResponse();
        $response->getBody()->write(
            json_encode(
                [
                    'status' => 'success',
                    'cart' => $this->cartModel->unpackDataToArray($cart)
                ],
                JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
            )
        );

        return $response
            ->withHeader('Content-Type', 'application/json; charset=utf-8')
            ->withStatus(200);
    }
}
