<?php

namespace Raketa\BackendTestTask\Domain;

interface CartItemInterface
{
    public function getUuid(): string;

    public function getProductUuid(): string;

    public function getPrice(): float;

    public function getQuantity(): int;
}