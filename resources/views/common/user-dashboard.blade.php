<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    @yield('head')
    @livewireStyles()
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        @livewire('left-navigation-livewire')
        @livewire('top-navigation-livewire')
        {{-- @livewire('user-dashboard-livewire') --}}
        {{ $slot }}
    </div>
    @livewireScripts()
    @yield('scripts')
</body>
<!-- ./wrapper -->

</html>
