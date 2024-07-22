<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = "customers";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",                 // 姓名
        "email",                // 電郵地址
        "phone",                // 聯絡電話
    ];

}
