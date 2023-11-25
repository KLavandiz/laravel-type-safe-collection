<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerCollection;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * @throws \Exception
     */
    public function getAllCustomers():CustomerCollection{
        $customers = Customer::all();
        return new CustomerCollection($customers);
    }
}
