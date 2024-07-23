
@php
    $currentRoute = Route::currentRouteName();
    $currentRouteGroup = Route::currentRouteName();
@endphp

<aside class="sidebar">

    <div class="menulist">
        <a @class(['sidebar-item', 'active' => $currentRoute === 'index']) href="#">儀表盤</a>
        <ul @class(['sidebar-item', 'dropdown-toggle', 'active' => Route::is('customer.*')]) data-target="customer">
            <p>顧客</p>
            <i class="fa fa-angle-down"></i>
        </ul>
        <ul class="list-unstyled collapse" id="customer">
            <li><a href="#">顧客列表</a></li>
        </ul>
        <ul @class(['sidebar-item', 'dropdown-toggle', 'active' => Route::is('product.*')]) data-target="product">
            <p>商品</p>
            <i class="fa fa-angle-down"></i>
        </ul>
        <ul class="list-unstyled collapse" id="product">
            <li><a href="#">商品列表</a></li>
            <li><a href="#">匯入資料檔</a></li>
            <li><a href="#">匯出資料檔</a></li>
        </ul>
        <ul @class(['sidebar-item', 'dropdown-toggle', 'active' => Route::is('order.*')]) data-target="order">
            <p>訂單</p>
            <i class="fa fa-angle-down"></i>
        </ul>
        <ul class="list-unstyled collapse" id="order">
            <li><a href="#">訂單列表</a></li>
        </ul>
    </div>

</aside>
