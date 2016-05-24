<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}" />

</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
