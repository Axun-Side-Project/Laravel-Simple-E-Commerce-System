<?php

namespace App\Domains\Customer\Models\Traits\Relationship;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Domains\Customer\Models\BillingAddress;
use App\Domains\Customer\Models\ShippingAddress;

trait CustomerRelationship
{

    /**
     * 獲取跟 Customer 關聯的 Billing Address
     * @return HasMany
     */
    public function billingAddress(): HasMany
    {
        return $this->hasMany(BillingAddress::class, 'customer_id', 'id');
    }

    /**
     * 獲取跟 Customer 關聯的 Shipping Address
     * @return HasMany
     */
    public function shippingAddress(): HasMany
    {
        return $this->hasMany(ShippingAddress::class, 'customer_id', 'id');
    }

}
