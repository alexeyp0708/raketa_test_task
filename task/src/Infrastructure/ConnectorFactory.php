<?php

namespace Raketa\BackendTestTask\Infrastructure;

use Redis;
use RedisException;

final readonly class ConnectorFactory
{

    public function __construct(
        protected string $host,
        protected int    $port,
        protected int    $password,
        protected ?int   $dbindex
    )
    {

    }

    /**
     * @param \Redis|null $redis
     * @return \Raketa\BackendTestTask\Infrastructure\ConnectorInterface|null
     * @throws \Raketa\BackendTestTask\Infrastructure\ConnectorException
     */
    public function build(?Redis $redis = null): ?ConnectorInterface
    {

        if (is_null($redis)) {
            $redis = new Redis();
        }
        try {
            $isConnected = $redis->isConnected();
            if (!$isConnected && $redis->ping('Pong')) {
                $isConnected = $redis->connect(
                    $this->host,
                    $this->port,
                );
            }
            if ($isConnected) {
                $redis->auth($this->password);
                $redis->select($this->dbindex);
                return new Connector($redis);
            }
        } catch (RedisException $e) {
            throw new ConnectorException('Connect error', $e->getCode(), $e);
        }
        return null;
    }
}
