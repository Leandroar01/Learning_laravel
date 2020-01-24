<!DOCTYPE html>
<html lang="BR_pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
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