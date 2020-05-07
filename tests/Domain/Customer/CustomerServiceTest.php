<?php

namespace Domain\Customer;

use App\Domain\Customer\CustomerService;
use App\Infra\DAO\Customer;
use App\Domain\Customer\Exception\CustomerNotFound;

class CustomerServiceTest extends \TestCase
{
    public function testFindAllNotFound()
    {
        $this->expectException(CustomerNotFound::class);
        $customersDAOMock = $this->createMock(Customer::class);
        $customersDAOMock->method('findAll')->willReturn([]);

        $customerService = new CustomerService($customersDAOMock);
        $customerService->findAll();
    }

    public function testFindAll()
    {
        $customersDAOMock = $this->createMock(Customer::class);
        $customersDAOMock->method('findAll')->willReturn([
            [
                'name' => 'ZÉ'
            ],
            [
                'name' => 'Tião'
            ]
        ]);
        $customerService = new CustomerService($customersDAOMock);
        $customers = $customerService->findAll();

        static::assertEquals([
            [
                'name' => 'ZÉ'
            ],
            [
                'name' => 'Tião'
            ]
        ], $customers);
    }
}
