<?php

declare(strict_types=1);

namespace Raketa\BackendTestTask\Repository;

use Doctrine\DBAL\Connection;
use Raketa\BackendTestTask\Repository\Entity\Product;
use Raketa\BackendTestTask\Repository\Entity\ProductInterface;

readonly class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(
        private Connection $connection
    )
    {

    }

    /**
     * @inheritDoc
     * @throws \Doctrine\DBAL\Exception
     */
    public function getByUuid(string $uuid): ?ProductInterface
    {
        $row = $this->connection->fetchOne(
            "SELECT * FROM products WHERE uuid = " . $uuid,
        );
        return empty($row) ? null : $this->make($row);
    }

    public function getByCategory(string $category): array
    {
        return array_map(
            static fn(array $row): Product => $this->make($row),
            $this->connection->fetchAllAssociative(
                "SELECT id FROM products WHERE is_active = 1 AND category = " . $category,
            )
        );
    }

    public function make(array $row): ProductInterface
    {
        return new Product(
            $row['id'],
            $row['uuid'],
            $row['is_active'],
            $row['category'],
            $row['name'],
            $row['description'],
            $row['thumbnail'],
            $row['price'],
        );
    }
}
