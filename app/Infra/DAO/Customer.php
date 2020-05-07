<?php

namespace App\Infra\DAO;

use App\Domain\Customer\CustomerDAOInterface;
use Illuminate\Support\Facades\DB;

class Customer implements CustomerDAOInterface
{
    /**
     * @return array
     */
    public function findAll()
    {
        return DB::table('customers')->get()->all();
    }
}
