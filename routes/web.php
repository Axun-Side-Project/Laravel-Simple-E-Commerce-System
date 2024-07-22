<?php

use Illuminate\Support\Facades\Route;

use Frankgan\OrderManagement\Http\Controllers\OrderController;

Route::get('/', function () {
    return view("order-management::order.index");
});
