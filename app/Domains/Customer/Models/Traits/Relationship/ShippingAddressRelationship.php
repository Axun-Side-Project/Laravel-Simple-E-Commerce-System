<?php

namespace App\Domains\Customer\Models\Traits\Relationship;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Domains\Customer\Models\Customr;

trait ShippingAddressRelationship
{

    /**
     * 獲取跟 Shipping Address 關聯的 Customer
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customr::class, 'customer_id', 'id');
    }

}
