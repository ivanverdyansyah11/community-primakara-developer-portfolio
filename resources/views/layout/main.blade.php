<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primakara Developer | {{ $title }}</title>

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    {{-- END FAVICON --}}

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- END STYLE CSS --}}
</head>
<body id="home">
    
    @include('components.navbar')
    @include('components.topbar')

    <main class="container">
        @yield('content-page')
        @include('components.cta')
    </main>

    @include('components.footer')

    {{-- SCRIPT JS --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
    @stack('script')
    {{-- END SCRIPT JS --}}
</body>
</html>