<?php

namespace Frankgan\OrderManagement\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = "products";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",                 // 商品名稱
        "description",          // 商品描述
        "price",                // 價格
        "stock",                // 庫存
        "sku",                  // 商品 SKU
        "category_id",          // 關聯的類別 id
        "image_path",           // 商品照片路徑
    ];

    protected $cast = [
        "price" => 'integer',
        "stock" => 'integer',
    ];

}
