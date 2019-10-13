<!DOCTYPE html>

<!doctype html>
<html lang="{{ app()->getLocale() }}"> <!--获取config/app.php中设置的语言-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"><!--方便js获取csrf令牌-->
    <title>@yield('title','Stonelalala') - Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app" css="{{ route_class() }}-page"><!-- 获取当前页面的css类，如index页面为index-page -->
        @include('layouts._header')
        <div class="container">
            @include('shared._message')
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>
    <!-- Script -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
