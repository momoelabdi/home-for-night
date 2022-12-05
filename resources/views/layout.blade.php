<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Home for Night</title>
</head>

<body>
    @include('component.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('component.footer')
</body>

</html>
