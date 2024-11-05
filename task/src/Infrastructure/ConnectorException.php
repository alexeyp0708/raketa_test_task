<?php

declare(strict_types = 1);

namespace Raketa\BackendTestTask\Infrastructure;

class ConnectorException extends \Exception implements ConnectorExceptionInterface
{
 

    public function __toString(): string
    {
        return sprintf(
            '[%s] %s in %s on line %d',
            $this->getCode(),
            $this->getMessage(),
            $this->getFile(),
            $this->getLine(),
        );
    }
}
