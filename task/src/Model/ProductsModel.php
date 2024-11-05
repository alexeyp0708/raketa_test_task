<?php

namespace Raketa\BackendTestTask\Model;

use Raketa\BackendTestTask\Repository\Entity\Product;
use Raketa\BackendTestTask\Repository\ProductRepository;

readonly class ProductsModel implements ProductsModelInterface
{
    public function __construct(
        private ProductRepository $productRepository
    ) {
    }

    /**
     * @inheritDoc
     */
    public function getProductsByCategory(string $category): array
    {
        return array_map(
            fn (Product $product) => [
                'id' => $product->getId(),
                'uuid' => $product->getUuid(),
                'category' => $product->getCategory(),
                'description' => $product->getDescription(),
                'thumbnail' => $product->getThumbnail(),
                'price' => $product->getPrice(),
            ],
            $this->productRepository->getByCategory($category)
        );
    }
}
