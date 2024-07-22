<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentToken extends Model
{

    protected $table = "current_tokens";

    protected $primaryKey = "id";

    protected $fillable = [
        "customer_id",          // 關聯的顧客 id
        "order_id",             // 關聯的訂單 id
        "amount",               // 代幣金額
    ];

    protected $cast = [
        "amount" => "integer",
    ];

}
