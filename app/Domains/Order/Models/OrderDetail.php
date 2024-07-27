<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{

    protected $table = "order_details";

    protected $primaryKey = "id";

    // TODO: order_id 和 product_id 為複合主鍵

    protected $fillable = [
        "order_id",             // 關聯的訂單 id
        "product_id",           // 關聯的商品 id
        "product_name",         // 關聯的商品 name
        "quantity",             // 數量
        "price",                // 價格
        "subtotal",             // 小計
    ];

}
