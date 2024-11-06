<?php

namespace Raketa\BackendTestTask\Model;

use Raketa\BackendTestTask\Domain\Cart;

interface CartModelInterface
{
    public function unpackDataToArray(Cart $cart): array;

}