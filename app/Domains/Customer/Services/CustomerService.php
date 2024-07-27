<?php

namespace App\Domains\Customer\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Domains\Customer\Models\Customer;
use App\Domains\Customer\Events\CustomerRegisterEvent;

class CustomerService
{

    public Model $model;

    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }

    /**
     * Create customer
     *
     * @param array $data
     * @return array
     */
    public function craeteCustomer(array $data): array
    {
        $instance = null;
        DB::beginTransaction();
        try {
            $instance = $this->model->create([
                "first_name" => $data["first_name"],
                "last_name" => $data["last_name"],
                "gender" => $data["gender"],
                "email" => $data["email"],
                "phone" => $data["phone"] ?? null,
                "active" => $data["active"] ?? false,
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            throw new \Exception($e->getMessage());
        }
        DB::commit();
        return event(new CustomerRegisterEvent($instance));
    }

    /**
     * Update Customer
     *
     * @param array $data
     * @param string $customer_id
     * @return array
     */
    public function updateCustomer(array $data, string $customer_id): array
    {
        $customer = Customer::where('id', $customer_id)->firstOrFail();

        if ($customer == null) {
            return [
                "message" => "Can't find this customer id",
                "status" => "Failure",
                "operation" => "Update"
            ];
        }

        DB::beginTransaction();
        try {
            $customer->update([
                "first_name" => $data["first_name"] ?? $customer->first_name,
                "last_name" => $data["last_name"] ?? $customer->last_name,
                "gender" => $data["gender"] ?? $customer->gender,
                "email" => $data["email"] ?? $customer->email,
                "phone" => $data["phone"] ?? $customer->phone,
                "active" => $data["active"] ?? $customer->active,
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            throw new \Exception($e->getMessage());
        }
        DB::commit();
        return $customer;
    }

    /**
     * Delete Customer
     *
     * @param string $customer_id
     * @return boolean
     */
    public function deleteCustomer(string $customer_id): bool
    {
        return Customer::where('id', $customer_id)->delete();
    }

}
