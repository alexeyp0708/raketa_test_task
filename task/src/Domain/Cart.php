<?php

namespace Raketa\BackendTestTask\Domain;

final class Cart implements CartInterface
{
    public function __construct(
        readonly private string   $uuid,
        readonly private CustomerInterface $customer,
        readonly private string   $paymentMethod,
        private array             $items
    )
    {
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(CartItemInterface $item): void
    {
        $this->items[] = $item;
    }
}
