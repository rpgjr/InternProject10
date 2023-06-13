<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-headers />
    <title>@yield('page-title')</title>
</head>
<body>

    {{-- Navbar --}}
    <x-navbar />


    {{-- Contents --}}
    @yield('content')

    <x-scripts />
</body>
</html>
