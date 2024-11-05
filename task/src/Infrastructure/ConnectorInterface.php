<?php

namespace Raketa\BackendTestTask\Infrastructure;

use Raketa\BackendTestTask\Domain\CartInterface;

interface ConnectorInterface
{
    /**
     * @param string $key
     * @return mixed
     * @throws ConnectorExceptionInterface
     */
    public function get(string $key):mixed;

    /**
     * @param string $key
     * @param \Raketa\BackendTestTask\Domain\CartInterface $value
     * @return void
     * @throws ConnectorExceptionInterface
     */
    public function set(string $key, CartInterface $value):void;

    /**
     * @param string $key
     * @return bool
     * @throws ConnectorExceptionInterface
     */
    public function has(string $key): bool;
}