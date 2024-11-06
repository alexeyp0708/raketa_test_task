<?php

namespace Raketa\BackendTestTask\Repository;

use Raketa\BackendTestTask\Repository\Entity\ProductInterface;

interface ProductRepositoryInterface
{
    /**
     * @param string $uuid
     * @return \Raketa\BackendTestTask\Repository\Entity\ProductInterface|null
     * @throws \Raketa\BackendTestTask\Repository\ProductExceptionInterface
     */
    public function getByUuid(string $uuid): ?ProductInterface;

    public function getByCategory(string $category): array;

    public function make(array $row): ProductInterface;

}