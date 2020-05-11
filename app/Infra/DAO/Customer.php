<?php

declare(strict_types=1);

namespace App\Infra\DAO;

use App\Domain\Customer\CustomerDAOInterface;
use Illuminate\Support\Facades\DB;

class Customer implements CustomerDAOInterface
{
    /**
     * @return array
     */
    public function findAll(): array
    {
        return DB::table('customers')->get()->all();
    }
}
