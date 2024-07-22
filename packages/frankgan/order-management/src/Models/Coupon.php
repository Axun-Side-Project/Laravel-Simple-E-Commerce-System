<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    protected $table = "coupons";

    protected $primaryKey = "id";

    protected $fillable = [
        "code",                 // 優惠券代碼
        "type",                 // 類型：折扣，百分比折扣 ["discount", "percentage"]
        "value",                // 具體金額、百分比
        "amount",               // 優惠券總數
        "used",                 // 優惠券使用過的次數
        "valid_from",           // 開始的有效日期
        "valid_to",             // 結束的有效日期
        "min_order_amount",     // 最低訂單金額
        "max_discount_amount",  // 最都可折扣的金額
        "max_usage_per_user"    // 每個用戶可使用的次數
    ];

    protected $cast = [
        "amount" => "float",
    ];
}
