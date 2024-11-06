<?php

declare(strict_types=1);

namespace Raketa\BackendTestTask\Controller;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Raketa\BackendTestTask\Infrastructure\JsonResponse;
use Raketa\BackendTestTask\Model\ProductsModelInterface;

readonly class ProductsGetterController
{
    public function __construct(
        private ProductsModelInterface $productsModel
    )
    {

    }

    public function get(RequestInterface $request): ResponseInterface
    {
        $response = new JsonResponse();

        $rawRequest = json_decode($request->getBody()->getContents(), true);

        $response->getBody()->write(
            json_encode(
                $this->productsModel->getProductsByCategory($rawRequest['category']),
                JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
            )
        );

        return $response
            ->withHeader('Content-Type', 'application/json; charset=utf-8')
            ->withStatus(200);
    }
}
