<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/mdb.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
        	'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @stack('stack-head')
</head>
<body>
    @include('layouts.app.nav')

    <div id="app">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>

    @yield('scripts')
</body>
</html>
