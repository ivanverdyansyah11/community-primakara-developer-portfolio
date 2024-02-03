{{-- SECTION FOOTER --}}
<footer data-aos="fade" data-aos-duration="800" class="footer section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a class="footer-brand" href="{{ route('mainpage') }}"><img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Logo Brand" class="img-fluid" height="40"></a>
                <p class="paragraph-small">Our community is a vibrant hub where developers, creators, and innovators converge to share knowledge, and build projects.</p>
            </div>
            <div class="offset-xl-1 col-6 col-md-3 col-lg-2">
                <h6 class="footer-title">Quick Link</h6>
                <div class="footer-link d-flex flex-column">
                    <a href="{{ Route::is('mainpage') ? '#home' : route('mainpage') }}" class="footer-item">Home</a>
                    <a href="{{ Route::is('mainpage') ? '#benefit' : route('mainpage') . '/#benefit' }}" class="footer-item">Benefit Community</a>
                    <a href="{{ Route::is('mainpage') ? '#about' : route('mainpage') . '/#about' }}" class="footer-item">About Us</a>
                    <a href="{{ Route::is('mainpage') ? route('portfolio') : '#portfolio' }}" class="footer-item">All Portfolio</a>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <h6 class="footer-title">Open Classes</h6>
                <div class="footer-link d-flex flex-column">
                    <a href="{{ Route::is('mainpage') ? '#classes' : route('mainpage') . '/#classes' }}" class="footer-item">UI/ UX Design</a>
                    <a href="{{ Route::is('mainpage') ? '#classes' : route('mainpage') . '/#classes' }}" class="footer-item">Front End Developer</a>
                    <a href="{{ Route::is('mainpage') ? '#classes' : route('mainpage') . '/#classes' }}" class="footer-item">Back End Developer</a>
                </div>
            </div>
            <div class="col-6 col-md-3 col-xl-2 mt-4 mt-md-0">
                <h6 class="footer-title">Benefit Community</h6>
                <div class="footer-link d-flex flex-column">
                    <a href="{{ Route::is('mainpage') ? '#benefit' : route('mainpage') . '/#benefit' }}" class="footer-item">Collaborative Learning</a>
                    <a href="{{ Route::is('mainpage') ? '#benefit' : route('mainpage') . '/#benefit' }}" class="footer-item">Exclusive Access to Resources</a>
                    <a href="{{ Route::is('mainpage') ? '#benefit' : route('mainpage') . '/#benefit' }}" class="footer-item">Networking Opportunities</a>
                    <a href="{{ Route::is('mainpage') ? '#benefit' : route('mainpage') . '/#benefit' }}" class="footer-item">Community Support</a>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mt-4 mt-md-0">
                <h6 class="footer-title">Social Media</h6>
                <div class="sosmed-link d-flex">
                    <a href="https://www.facebook.com/" class="sosmed-item d-flex justify-content-center align-items-center" target="_blank">
                        <img src="{{ asset('assets/images/social-medias/facebook.svg') }}" alt="Facebook Icon" class="img-fluid" width="16">
                    </a>
                    <a href="https://www.instagram.com/" class="sosmed-item d-flex justify-content-center align-items-center" target="_blank">
                        <img src="{{ asset('assets/images/social-medias/instagram.svg') }}" alt="Instagram Icon" class="img-fluid" width="16">
                    </a>
                    <a href="https://wa.me/6282147382985" class="sosmed-item d-flex justify-content-center align-items-center" target="_blank">
                        <img src="{{ asset('assets/images/social-medias/whatsapp.svg') }}" alt="Whatsapp Icon" class="img-fluid" width="16">
                    </a>
                    <a href="https://twitter.com/home?lang=id" class="sosmed-item d-flex justify-content-center align-items-center" target="_blank">
                        <img src="{{ asset('assets/images/social-medias/twitter.svg') }}" alt="Twitter Icon" class="img-fluid" width="16">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="copyright">Copyright © 2024 Primakara Developer. All Right Reserved.</p>
            </div>
        </div>
    </div>
</footer>
{{-- END SECTION FOOTER --}}