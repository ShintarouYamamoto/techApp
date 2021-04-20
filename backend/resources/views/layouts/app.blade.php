<!DOCTYPE html>
<html lang="ja">

<head>
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    @yield('css')
</head>

<body>
    @yield('content')
</body>

</html>