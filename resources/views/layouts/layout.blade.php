<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <livewire:components.header />
    <title>@yield('page-title')</title>
</head>
<body>

    {{-- Navbar --}}
    <livewire:components.navbar />


    {{-- Contents --}}
    @yield('content')

    <livewire:components.scripts />
</body>
</html>
