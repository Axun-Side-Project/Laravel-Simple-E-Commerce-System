<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{

    protected $table = "shipping_addresses";

    protected $primaryKey = "id";

    protected $fillable = [
        "customer_id",      // 關聯的顧客 id
        "recipient_name",   // 收件人名稱
        "phone_number",     // 聯絡電話
        "postal_code",      // 郵遞編號
        "city",             // 城市
        "district",         // 行政區
        "address_line1",    // 地址第一行
        "address_line2",    // 地址第二行
    ];
}
