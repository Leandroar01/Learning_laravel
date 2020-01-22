<!DOCTYPE html>
<html lang="BR_pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Especializacao</title>
</head>
<body>
    @stack('style')
    <div class= "container">
        @yield('content')
    </div>
    @stack('script')
</body>
</html>