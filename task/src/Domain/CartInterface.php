<?php

namespace Raketa\BackendTestTask\Domain;

interface CartInterface
{
    public function getUuid(): string;
    public function getCustomer(): CustomerInterface;

    public function getPaymentMethod(): string;

    public function getItems(): array;

    public function addItem(CartItemInterface $item): void;
    
}