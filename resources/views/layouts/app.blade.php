<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.D.F.C.L</title>
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    @stack('styles')
    @stack('scripts')
</head>

<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
