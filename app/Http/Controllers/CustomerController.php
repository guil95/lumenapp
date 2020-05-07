<?php

namespace App\Http\Controllers;

use App\Domain\Customer\CustomerService;
use Laravel\Lumen\Routing\Controller as BaseController;

class CustomerController extends BaseController
{
    private $service;

    /**
     * CustomerController constructor.
     * @param CustomerService $service
     */
    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }

    public function findAll()
    {
        $customers = $this->service->findAll();

        return response()
            ->json($customers,200);
    }
}
