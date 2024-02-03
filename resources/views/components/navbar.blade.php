<nav class="navbar navbar-desktop navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ Route::is('portfolio') ? route('mainpage') : '' }}" data-aos="fade-down" data-aos-duration="600" data-aos-delay="200">
            <img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Logo Brand" class="img-fluid" height="40">
        </a>
        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex">
                <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="350" class="nav-link {{ Route::is('mainpage') ? 'active' : '' }}" href="{{ Route::is('portfolio') ? route('mainpage') : '' }}">Home</a>
                <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="500" class="nav-link" href="{{ Route::is('mainpage') ? '#benefit' : route('mainpage') . '/#benefit' }}">Benefit Community</a>
                <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="650" class="nav-link" href="{{ Route::is('mainpage') ? '#about' : route('mainpage') . '/#about' }}">About Us</a>
                <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="800" class="nav-link {{ Route::is('portfolio') ? 'active' : '' }}" href="{{ Route::is('mainpage') ? route('portfolio') : route('portfolio') . '#home' }}">Portfolio</a>
            </div>
        </div>
        <div class="navbar-wrapper d-flex d-lg-none">
            <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="350" class="nav-link {{ Route::is('mainpage') ? 'active' : '' }}" href="{{ Route::is('portfolio') ? route('mainpage') : '' }}">Home</a>
            <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="500" class="nav-link" href="{{ Route::is('mainpage') ? '#benefit' : route('mainpage') . '/#benefit' }}">Benefit Community</a>
            <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="650" class="nav-link" href="{{ Route::is('mainpage') ? '#about' : route('mainpage') . '/#about' }}">About Us</a>
            <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="800" class="nav-link {{ Route::is('portfolio') ? 'active' : '' }}" href="{{ Route::is('mainpage') ? route('portfolio') : route('portfolio') . '#home' }}">Portfolio</a>
        </div>
        <a data-aos="fade-down" data-aos-duration="600" data-aos-delay="950" href="https://wa.me/6282147382985" class="button-primary-small d-none d-lg-flex align-items-center" target="_blank">
            <span>Join the Community</span>
            <div class="arrow-dark"></div>
        </a>
    </div>
</nav>