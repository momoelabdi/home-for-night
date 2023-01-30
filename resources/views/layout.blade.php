<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('https://home-for-night.up.railway.app/css/app.css') }}">
    <title>Home for Night</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body id="body">
    <x-navbar />
    @include('users.login')
    @include('users.register')
    <div class="layout-container">
        <x-flash-messages />
        @yield('content')
    </div>
    <x-footer />
</body>
<script src="//unpkg.com/alpinejs" defer></script>

</html>
