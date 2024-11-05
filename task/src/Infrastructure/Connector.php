<?php

declare(strict_types=1);

namespace Raketa\BackendTestTask\Infrastructure;

use Raketa\BackendTestTask\Domain\Cart;
use Raketa\BackendTestTask\Domain\CartInterface;
use Redis;
use RedisException;

class Connector implements ConnectorInterface
{
    private Redis $redis;

    public function __construct($redis)
    {
        return $this->redis = $redis;
    }

    /**
     * @inheritDoc
     */
    public function get(string $key): mixed
    {
        try {
            return unserialize($this->redis->get($key));
        } catch (RedisException $e) {
            throw new ConnectorException('Connector error', $e->getCode(), $e);
        }
    }

    /**
     * @inheritDoc
     */
    public function set(string $key, CartInterface $value): void
    {
        try {
            $this->redis->setex($key, 24 * 60 * 60, serialize($value));
        } catch (RedisException $e) {
            throw new ConnectorException('Connector error', $e->getCode(), $e);
        }
    }

    /**
     * @inheritDoc
     */
    public function has(string $key): bool
    {
        try {
            return !($this->redis->exists($key) !== false);
        } catch (RedisException $e) {
            throw new ConnectorException('Connector error', $e->getCode(), $e);
        }
    }
}
