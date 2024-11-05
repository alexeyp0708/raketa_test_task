<?php

namespace Raketa\BackendTestTask\Repository;

use Exception;
use Psr\Log\LoggerInterface;
use Raketa\BackendTestTask\Domain\CartInterface;
use Raketa\BackendTestTask\Infrastructure\ConnectorException;
use Raketa\BackendTestTask\Infrastructure\ConnectorExceptionInterface;
use Raketa\BackendTestTask\Infrastructure\ConnectorFactory;
use Raketa\BackendTestTask\Infrastructure\ConnectorInterface;

class CartManagerRepository implements CartManagerRepositoryInterface
{

    public function __construct(
        readonly private ConnectorInterface $connector,
        private LoggerInterface    $logger
    )
    {

    }

    /**
     * Этот метод необходимо применять в сервис контейнере для внедрения зависимости Connector.
     * 
     * @param string $host
     * @param int $port
     * @param int $password
     * @return \Raketa\BackendTestTask\Infrastructure\ConnectorInterface
     * @throws \Raketa\BackendTestTask\Infrastructure\ConnectorException
     */
    public static function generateConnector(string $host,int $port, int $password): ConnectorInterface
    {
        $connectorFactory=new ConnectorFactory($host,$port,$password,1);
        $connector = $connectorFactory->build();
        if (is_null($connector)) {
            throw new ConnectorException('No connection.');
        }
        return $connector;
    }

    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }


    public function saveCart(CartInterface $cart):void
    {
        try {
            $this->connector->set(session_id(),$cart);
        } catch (ConnectorExceptionInterface $e) {
            $this->logger->error($e->getMessage());
        }
    }

    public function getCart():?CartInterface
    {
        try {
            //Возвращаемый тип mixed  ,  так как Redis:: get в Connector::get возвращает mixed. Необходимо рефакторить.   
            return $this->connector->get(session_id());
        } catch (ProductExceptionInterface $e) {
            $this->logger->error($e->getMessage());
        }

        return null;
    }
}
