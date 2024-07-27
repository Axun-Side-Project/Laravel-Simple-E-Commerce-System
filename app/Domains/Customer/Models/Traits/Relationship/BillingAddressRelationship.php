<?php

namespace App\Domains\Customer\Models\Traits\Relationship;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Domains\Customer\Models\Customer;

trait BillingAddressRelationship
{

    /**
     * 獲取跟 Billing Address 關聯的 Customer
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

}
