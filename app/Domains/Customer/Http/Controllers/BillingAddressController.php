<?php

namespace App\Domains\Customer\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Customer\Http\Requests\CreateBillingAddressRequest;
// use App\Domains\Customer\Http\Requests\UpdateCustomerRequest;
use App\Domains\Customer\Services\BillingAddressService;

class BillingAddressController extends Controller
{

    public $service;

    public function __construct(BillingAddressService $billingAddressService)
    {
        $this->service = $billingAddressService;
    }

    public function create(CreateBillingAddressRequest $request, string $customer_id): array
    {
        return $this->service->craeteBillingAddress($request->validated(), $customer_id);
    }

    public function update(UpdateCustomerRequest $request, string $customer_id, string $billing_address_id): array
    {
        return $this->service->updateBillingAddress($request->validated(), $customer_id, $billing_address_id);
    }

    public function delete(string $customer_id, string $billing_address_id): bool
    {
        return $this->service->deleteBillingAddress($customer_id, $billing_address_id);
    }

}
