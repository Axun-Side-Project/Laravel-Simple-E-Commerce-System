<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class CouponUsage extends Model
{

    protected $table = "coupon_usages";

    protected $primaryKey = "id";

    // TODO: customer_id, coupon_id 和 order_id 一起作為複合主鍵

    protected $fillable = [
        "customer_id",          // 關聯的顧客 id
        "coupon_id",            // 關聯的優惠券 id
        "order_id",             // 關聯的訂單 id
        "used_at",              // 使用時間
    ];

    protected $cast = [
        "used_at" => "timestamp",
    ];

}
