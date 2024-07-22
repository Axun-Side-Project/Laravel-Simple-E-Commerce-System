<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | {{ config("app.name") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('vendor/order-management/app.css') }}"> <!-- External CSS file -->
    </head>
    <body>
        <header class="site-header">
            <div class="container">
                <div class="header-content">
                    <p class="title">阿循的個人賣場</p>
                    <p id="current-time" class="datetime"></p>
                    <p class="logout">登出</p>
                </div>
            </div>
        </header>

        <main class="application">
            @include('order-management::includes.sidebar')

            <div class="content-area">
                @include('order-management::includes.navbar')

                <div class="main-content">
                    @yield('content')
                </div>
            </div>
        </main>

        @stack('scripts')
    </body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function formatDate(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            const hours = date.getHours();
            const minutes = String(date.getMinutes()).padStart(2, '0');
            const seconds = String(date.getSeconds()).padStart(2, '0');

            const period = hours < 6 ? '凌晨' :
                           hours < 12 ? '上午' :
                           hours < 18 ? '下午' : '晚上';
            const formattedHours = String(hours % 12 || 12).padStart(2, '0');

            return `${year}年${month}月${day}日 ${period}${formattedHours}:${minutes}:${seconds}`;
        }

        function updateTime() {
            const now = new Date();
            const formattedDate = formatDate(now);
            document.getElementById('current-time').textContent = formattedDate;
        }

        updateTime();
        setInterval(updateTime, 1000); // 每秒更新一次
    });
</script>
