<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    @yield('css')
    @livewireStyles()
</head>

<body>
    <h1>_______________The Body___________________</h1>

    {{-- @yield('content') --}}
    {{ $slot }}
    {{ $title }}
    @livewireScripts()
    @stack('scripts')
    @yield('scripts')
</body>

</html>
