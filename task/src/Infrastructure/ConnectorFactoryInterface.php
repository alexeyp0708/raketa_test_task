<?php

namespace Raketa\BackendTestTask\Infrastructure;

interface ConnectorFactoryInterface
{
    public function build(?\Redis $redis = null): ?ConnectorInterface;
}