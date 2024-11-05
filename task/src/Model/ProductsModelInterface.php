<?php

namespace Raketa\BackendTestTask\Model;

interface ProductsModelInterface
{
    /**
     * @param string $category
     * @return array
     */
    public function getProductsByCategory(string $category): array;
}