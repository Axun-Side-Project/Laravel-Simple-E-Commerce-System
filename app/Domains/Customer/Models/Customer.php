<?php

namespace App\Domains\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Domains\Customer\Models\Traits\Attribute\CustomerAttribute;
use App\Domains\Customer\Models\Traits\Method\CustomerMethod;
use App\Domains\Customer\Models\Traits\Relationship\CustomerRelationship;
use App\Domains\Customer\Models\Traits\Scope\CustomerScope;
use Database\Factories\CustomerFactory;

class Customer extends Model
{
    use HasFactory;
    use CustomerAttribute;
    use CustomerMethod;
    use CustomerRelationship;
    use CustomerScope;

    public static $GENDER = [
        'MALE' => 'M',
        'FEMALE' => 'F',
    ];

    protected $table = "customers";

    protected $primaryKey = "id";

    protected $fillable = [
        "first_name",           // 姓氏
        "last_name",            // 名稱
        "gender",               // 性別
        "email",                // 電郵地址
        "phone",                // 聯絡電話
        "active",               // 啟用
    ];

    protected static function newFactory(): \Illuminate\Database\Eloquent\Factories\Factory
    {
        return CustomerFactory::new();
    }

}
