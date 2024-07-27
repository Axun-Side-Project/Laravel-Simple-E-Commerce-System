<?php

namespace App\Domains\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domains\Customer\Models\Traits\Attribute\BillingAddressAttribute;
use App\Domains\Customer\Models\Traits\Method\BillingAddressMethod;
use App\Domains\Customer\Models\Traits\Relationship\BillingAddressRelationship;
use App\Domains\Customer\Models\Traits\Scope\BillingAddressScope;

class BillingAddress extends Model
{
    use BillingAddressAttribute;
    use BillingAddressMethod;
    use BillingAddressRelationship;
    use BillingAddressScope;

    protected $table = "billing_addresses";

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
