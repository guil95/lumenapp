<?php

declare(strict_types=1);

namespace App\Domain\Customer;

final class Customer
{
    private string $name;

    /**
     * Customer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
