
@extends('order-management::layouts.master')

@section('title', '儀表盤')

@section('content')

    <section class="dashboard">

        <div class="container">
            <h2>過去24小時的訂單數量</h2>
        </div>

        <div class="container">
            <h2>過去24小時的訪問流量</h2>
        </div>

        <div class="container">
            <h2>訂單統計資訊</h2>
        </div>

        <div class="container">
            <h2>流量統計資訊</h2>
        </div>

    </section>

@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset("vendor/order-management/dashboard.css") }}">
@endpush
