<?php

namespace Raketa\BackendTestTask\Repository\Entity;

interface ProductInterface
{
    public function getId(): int;

    public function getUuid(): string;

    public function isActive(): bool;

    public function getCategory(): string;

    public function getName(): string;

    public function getDescription(): string;

    public function getThumbnail(): string;

    public function getPrice(): float;

}