<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{

    protected $table = "order_statuses";

    protected $primaryKey = "id";

    // TODO: order_id 和 status 為複合主鍵

    protected $fillable = [
        "order_id",             // 關聯的訂單 id
        "status",               // 訂單狀態
        "notes",                // 備註
    ];

}
