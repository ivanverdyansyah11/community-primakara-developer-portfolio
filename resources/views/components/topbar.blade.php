<nav class="navbar navbar-mobile navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="200" class="navbar-brand" href="{{ Route::is('portfolio') ? route('mainpage') : '' }}">
            <img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Logo Brand" class="img-fluid" height="40">
        </a>
        <div data-aos="fade-down" data-aos-duration="600" data-aos-delay="350" class="hamburger-wrapper d-flex justify-content-center align-items-center">
            <div class="hamburger"></div>
        </div>
    </div>
</nav>

<div class="topbar d-flex justify-content-center align-items-center hide">
    <div class="topbar-link d-flex flex-column align-items-center gap-4">
        <a class="nav-link {{ Route::is('mainpage') ? 'active' : '' }}" href="{{ Route::is('portfolio') ? route('mainpage') : '' }}">Home</a>
        <a class="nav-link" href="{{ Route::is('mainpage') ? '#benefit' : route('mainpage') . '/#benefit' }}">Benefit Community</a>
        <a class="nav-link" href="{{ Route::is('mainpage') ? '#about' : route('mainpage') . '/#about' }}">About Us</a>
        <a class="nav-link {{ Route::is('portfolio') ? 'active' : '' }}" href="{{ Route::is('mainpage') ? route('portfolio') : route('portfolio') . '#home' }}">Portfolio</a>
    </div>
</div>