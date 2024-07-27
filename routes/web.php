<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Customer\Http\Controllers\CustomerController;
use App\Domains\Customer\Http\Controllers\BillingAddressController;

Route::get('/', function () {
    dd(\App\Domains\Customer\Models\Customer::where('id', '1')->first()->billingAddress()->first());
});

Route::group(["prefix" => "customer", "as" => "customer."], function () {

    Route::post('/create', [CustomerController::class, 'create'])->name('create');
    Route::put('/update/{customer_id}', [CustomerController::class, 'update'])->name('update');
    Route::delete('/delete/{customer_id}', [CustomerController::class, 'delete'])->name('delete');

    Route::group(["prefix" => "billing-address", "as" => "billing-address."], function () {
        Route::post('/create/{customer_id}', [BillingAddressController::class, 'create'])->name('create');
        Route::put('/update/{customer_id}/{billing_address_id}', [BillingAddressController::class, 'update'])->name('update');
        Route::delete('/delete/{customer_id}/{billing_address_id}', [BillingAddressController::class, 'delete'])->name('delete');
    });

    Route::group(["prefix" => "shipping-address", "as" => "shipping-address."], function () {
        Route::post('/create', [CustomerController::class, 'create'])->name('create');
        Route::put('/update/{customer_id}', [CustomerController::class, 'update'])->name('update');
        Route::delete('/delete/{customer_id}', [CustomerController::class, 'delete'])->name('delete');
    });

});
