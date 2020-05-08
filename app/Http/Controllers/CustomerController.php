<?php

namespace App\Http\Controllers;

use App\Domain\Customer\CustomerService;
use Illuminate\Http\JsonResponse;
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

    /**
     * @return JsonResponse
     * @throws \Exception
     */
    public function findAll(): JsonResponse
    {
        $customers = $this->service->findAll();

        return response()
            ->json($customers,200);
    }
}
