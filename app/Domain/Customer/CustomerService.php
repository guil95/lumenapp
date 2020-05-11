<?php

declare(strict_types=1);

namespace App\Domain\Customer;

use App\Domain\Customer\Exception\CustomerNotFound;

final class CustomerService
{
    private CustomerDAOInterface $dao;

    /**
     * CustomerService constructor.
     * @param CustomerDAOInterface $dao
     */
    public function __construct(CustomerDAOInterface $dao)
    {
        $this->dao = $dao;
    }

    /**
     * @return array
     * @throws CustomerNotFound
     */
    public function findAll(): array
    {
        $customers = $this->dao->findAll();

        if (!$customers) {
            throw new CustomerNotFound('Clientes não encontrados');
        }

        return $customers;
    }
}
