<?php

namespace App\Domain\Customer;

use App\Domain\Customer\Exception\CustomerNotFound;

final class CustomerService
{
    private $dao;

    public function __construct(CustomerDAOInterface $dao)
    {
        $this->dao = $dao;
    }

    /**
     * @return array
     * @throws \Exception
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
