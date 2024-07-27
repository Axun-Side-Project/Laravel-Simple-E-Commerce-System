<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "orders";

    protected $primaryKey = "id";

    protected $keyType = "string";

    protected $incrementing = false;

    protected $fillable = [
        "customer_id",          // 關聯的顧客 id
        "total_amount",         // 訂單總金額
        "shipping_address",     // 收件人地址 => ShippingAddress
        "billing_address",      // 帳單地址 => BillingAddress
        "notes",                // 訂單備註
    ];

}
