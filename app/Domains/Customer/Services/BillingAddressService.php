<?php

namespace App\Domains\Customer\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Domains\Customer\Models\BillingAddress;
use App\Domains\Customer\Models\Customer;

class BillingAddressService
{

    public Model $model;

    public function __construct(BillingAddress $billingAddress)
    {
        $this->model = $billingAddress;
    }

    /**
     * Create Billing Address
     *
     * @param array $data
     * @param string $customer_id
     * @return array
     */
    public function craeteBillingAddress(array $data, string $customer_id): array
    {
        $customer = Customer::where('id', $customer_id)->firstOrFail();
        $instance = null;

        if ($customer == null){
            return [
                "message" => "Can't find this customer id",
                "status" => "Failure",
                "operation" => "Create"
            ];
        }

        DB::beginTransaction();
        try {
            $instance = $customer->billingAddress()->create([
                "recipient_name" => $data["recipient_name"],
                "phone_number" => $data["phone_number"],
                "postal_code" => $data["postal_code"],
                "city" => $data["city"],
                "district" => $data["district"],
                "address_line1" => $data["address_line1"],
                "address_line2" => $data["address_line2"] ?? null,
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            throw new \Exception($e->getMessage());
        }
        DB::commit();
        return $instance;
    }

    /**
     * Update Billing Address
     *
     * @param array $data
     * @param string $customer_id
     * @param string $billing_address_id
     * @return array
     */
    public function updateBillingAddress(array $data, string $customer_id, string $billing_address_id): array
    {
        $customer = Customer::where('id', $customer_id)->firstOrFail();
        $instance = null;

        if ($customer == null) {
            return [
                "message" => "Can't find this customer id",
                "status" => "Failure",
                "operation" => "Update"
            ];
        }

        $billingAddress = $customer->billingAddress()->where('id', $billing_address_id)->firstOrFail();

        if ($billingAddress == null) {
            return [
                "message" => "Can't find this billing address id",
                "status" => "Failure",
                "operation" => "Update"
            ];
        }

        DB::beginTransaction();
        try {
            $instance = $billingAddress->update([
                "recipient_name" => $data["recipient_name"] ?? $billingAddress->recipient_name,
                "phone_number" => $data["phone_number"] ?? $billingAddress->phone_number,
                "postal_code" => $data["postal_code"] ?? $billingAddress->postal_code,
                "city" => $data["city"] ?? $billingAddress->city,
                "district" => $data["district"] ?? $billingAddress->district,
                "address_line1" => $data["address_line1"] ?? $billingAddress->address_line1,
                "address_line2" => $data["address_line2"] ?? $billingAddress->address_line2,
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            throw new \Exception($e->getMessage());
        }
        DB::commit();
        return $instance;
    }

    /**
     * Delete Billing Address
     *
     * @param string $customer_id
     * @param string $billing_address_id
     * @return boolean
     */
    public function deleteBillingAddress(string $customer_id, string $billing_address_id): bool
    {
        return Customer::where('id', $customer_id)->first()->billingAddress()->where('id', $billing_address_id)->delete();
    }

}
