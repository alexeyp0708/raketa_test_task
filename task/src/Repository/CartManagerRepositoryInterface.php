<?php

namespace Raketa\BackendTestTask\Repository;

use Psr\Log\LoggerInterface;
use Raketa\BackendTestTask\Domain\Cart;
use Raketa\BackendTestTask\Domain\CartInterface;
use Raketa\BackendTestTask\Infrastructure\ConnectorInterface;

interface CartManagerRepositoryInterface
{
    public static function generateConnector(string $host, int $port, int $password): ConnectorInterface;

    public function setLogger(LoggerInterface $logger): void;

    public function saveCart(CartInterface $cart): void;

    public function getCart(): ?CartInterface;
}