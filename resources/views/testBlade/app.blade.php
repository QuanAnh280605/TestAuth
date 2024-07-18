<!DOCTYPE html>
<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
    @section('sidebar')
        Đây là sidebar mặc định.
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
