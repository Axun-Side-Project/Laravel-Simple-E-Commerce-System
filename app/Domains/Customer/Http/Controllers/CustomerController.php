<?php

namespace App\Domains\Customer\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Customer\Http\Requests\CreateCustomerRequest;
use App\Domains\Customer\Http\Requests\UpdateCustomerRequest;
use App\Domains\Customer\Services\CustomerService;

class CustomerController extends Controller
{

    public $service;

    public function __construct(CustomerService $customerService)
    {
        $this->service = $customerService;
    }

    public function create(CreateCustomerRequest $request): array
    {
        return $this->service->craeteCustomer($request->validated());
    }

    public function update(UpdateCustomerRequest $request, string $customer_id): array
    {
        return $this->service->updateCustomer($request->validated(), $customer_id);
    }

    public function delete(string $customer_id): bool
    {
        return $this->service->deleteCustomer($customer_id);
    }

}
