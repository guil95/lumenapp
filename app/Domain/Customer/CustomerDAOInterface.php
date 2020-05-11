<?php

declare(strict_types=1);

namespace App\Domain\Customer;

interface CustomerDAOInterface
{
    public function findAll(): array;
}
