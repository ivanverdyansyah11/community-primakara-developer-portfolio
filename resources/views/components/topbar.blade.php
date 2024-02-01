<nav class="navbar navbar-mobile navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Logo Brand" class="img-fluid" height="40">
        </a>
        <div class="hamburger-wrapper d-flex justify-content-center align-items-center">
            <div class="hamburger"></div>
        </div>
    </div>
</nav>

<div class="topbar d-flex justify-content-center align-items-center hide">
    <div class="topbar-link d-flex flex-column align-items-center gap-4">
        <a class="nav-link active" href="{{ Route::is('mainpage') ? '#home' : route('mainpage') }}">Home</a>
        <a class="nav-link" href="{{ route('mainpage') }}/benefit">Benefit Community</a>
        <a class="nav-link" href="{{ route('mainpage') }}/about">About Us</a>
        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
    </div>
</div>