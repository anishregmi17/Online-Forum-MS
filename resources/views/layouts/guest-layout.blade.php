<!-- resources/views/layouts/guest-layout.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Login Form' }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    {{ $slot }}

    <script src="https://kit.fontawesome.com/3110fbbca9.js" crossorigin="anonymous"></script>
</body>
</html>
