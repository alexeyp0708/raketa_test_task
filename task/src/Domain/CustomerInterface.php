<?php

namespace Raketa\BackendTestTask\Domain;

interface CustomerInterface
{
    public function getId(): int;

    public function getFirstName(): string;

    public function getLastName(): string;

    public function getMiddleName(): string;

    public function getEmail(): string;
}