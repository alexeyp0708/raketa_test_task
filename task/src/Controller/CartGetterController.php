<?php

declare(strict_types = 1);

namespace Raketa\BackendTestTask\Controller;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Raketa\BackendTestTask\Infrastructure\JsonResponse;
use Raketa\BackendTestTask\Model\CartModelInterface;
use Raketa\BackendTestTask\Repository\CartManagerRepositoryInterface;

readonly class CartGetterController
{
    public function __construct(
        public CartModelInterface             $cartModel,
        public CartManagerRepositoryInterface $cartManager
    ) {
    }

    public function get(RequestInterface $request): ResponseInterface
    {
        $response = new JsonResponse();
        $cart = $this->cartManager->getCart();

        if (! $cart) {
            $response->getBody()->write(
                json_encode(
                    ['message' => 'Cart not found'],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                )
            );

            return $response
                ->withHeader('Content-Type', 'application/json; charset=utf-8')
                ->withStatus(404);
        } else {
            $response->getBody()->write(
                json_encode(
                    $this->cartModel->unpackDataToArray($cart),
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                )
            );
        }

        return $response
            ->withHeader('Content-Type', 'application/json; charset=utf-8')
            ->withStatus(404);
    }
}
