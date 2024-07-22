<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $table = "review";

    protected $primaryKey = "id";

    protected $fillable = [
        "product_id",           // 關聯的商品 id
        "customer_id",          // 關聯的顧客 id
        "rating",               // 評分
        "comment",              // 評論內容
        "approved",             // 審核狀態
    ];

    protected $cast = [
        "rating" => 'integer',
        "approved" => 'boolean',
    ];

}
