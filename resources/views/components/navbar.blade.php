<nav class="navbar navbar-desktop navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Logo Brand" class="img-fluid" height="40">
        </a>
        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex">
                <a class="nav-link active" href="{{ Route::is('mainpage') ? '#home' : route('mainpage') }}">Home</a>
                <a class="nav-link" href="{{ route('mainpage') }}/benefit">Benefit Community</a>
                <a class="nav-link" href="{{ route('mainpage') }}/about">About Us</a>
                <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
            </div>
        </div>
        <div class="navbar-wrapper d-flex d-lg-none">
            <a class="nav-link active" href="{{ Route::is('mainpage') ? '#home' : route('mainpage') }}">Home</a>
            <a class="nav-link" href="{{ route('mainpage') }}/benefit">Benefit Community</a>
            <a class="nav-link" href="{{ route('mainpage') }}/about">About Us</a>
            <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
        </div>
        <a href="#" class="button-primary-small d-none d-lg-flex align-items-center">
            <span>Join the Community</span>
            <div class="arrow-dark"></div>
        </a>
    </div>
</nav>