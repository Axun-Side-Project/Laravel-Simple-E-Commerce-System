<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = "events";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",                 // 活動名稱
        "description",          // 活動描述
        "coupon_id",            // 優惠券 id
        "discount_id",          // 折扣代碼 id
        "start_date",           // 活動開始的日期
        "end_date",             // 活動結束的日期
    ];

    protected $cast = [
        "start_date" => "timestamp",
        "end_date" => "timestamp",
    ];

}
