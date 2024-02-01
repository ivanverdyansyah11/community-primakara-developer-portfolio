@extends('layout.main')

@section('content-page')
    {{-- SECTION HERO --}}
    <section class="hero text-lg-center">
        <div class="row justify-content-lg-center">
            <div class="col-xxl-10 d-flex flex-column align-items-lg-center">
                <h1 class="headline">Empowering Developers, Building Futures Welcome to Primakara Developer Community</h1>
                <p class="paragraph">Join a thriving ecosystem of passionate developers at Primakara Developer Community. Explore cutting-edge technologies, collaborate on innovative projects, and unlock a world of opportunities. Together, we code the future.</p>
                <div class="button-group d-flex">
                    <a href="#" class="button-primary">
                        <span>Explore Website Now</span>
                    </a>
                    <a href="#" class="button-reverse">
                        <span>Discover Our Projects</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- END SECTION HERO --}}

    {{-- SECTION CLASSES --}}
    <section class="classes">
        <div class="row row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <button type="button" class="card-classes" data-bs-toggle="modal" data-bs-target="#designModal">
                    <h4 class="card-headline">UI/ UX Design</h4>
                    <p class="card-description">Immerse yourself in the world of User Interface (UI) and User Experience (UX) design with Primakara Developer Community. Our UI/UX Design class is tailored for aspiring designers and developers who aspire to create visually stunning and user-centric digital experiences.</p>
                    <div class="class-wrapper d-flex align-items-center" style="gap: 32px;">
                        <div class="following-wrapper d-flex align-items-center">
                            <div class="following-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/icons/user-dark.svg') }}" alt="Following Icon" class="img-fluid" width="15">
                            </div>
                            <p class="following-value">128 Followings</p>
                        </div>
                        <div class="mentor-wrapper d-flex align-items-center">
                            <div class="mentor-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/icons/mentor-dark.svg') }}" alt="mentor Icon" class="img-fluid" width="15">
                            </div>
                            <p class="mentor-value">4 Mentors</p>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col mt-4 mt-md-0">
                <button type="button" class="card-classes" data-bs-toggle="modal" data-bs-target="#frontModal">
                    <h4 class="card-headline">Front End Development</h4>
                    <p class="card-description">Embark on a journey into the realm of Front End Development with Primakara Developer Community. Our comprehensive Front End Development class is designed to empower aspiring developers with the skills and knowledge needed to create captivating user interfaces and seamless user experiences.</p>
                    <div class="class-wrapper d-flex align-items-center" style="gap: 32px;">
                        <div class="following-wrapper d-flex align-items-center">
                            <div class="following-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/icons/user-dark.svg') }}" alt="Following Icon" class="img-fluid" width="15">
                            </div>
                            <p class="following-value">150 Followings</p>
                        </div>
                        <div class="mentor-wrapper d-flex align-items-center">
                            <div class="mentor-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/icons/mentor-dark.svg') }}" alt="mentor Icon" class="img-fluid" width="15">
                            </div>
                            <p class="mentor-value">6 Mentors</p>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col mt-4 mt-xl-0">
                <button type="button" class="card-classes" data-bs-toggle="modal" data-bs-target="#backModal">
                    <h4 class="card-headline">Back End Development</h4>
                    <p class="card-description">Dive into the core of web development with Primakara Developer Community's Back End Developer class. Designed for those aspiring to master the server-side of applications, this class equips you with the skills needed to architect robust, scalable, and efficient back-end systems.</p>
                    <div class="class-wrapper d-flex align-items-center" style="gap: 32px;">
                        <div class="following-wrapper d-flex align-items-center">
                            <div class="following-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/icons/user-dark.svg') }}" alt="Following Icon" class="img-fluid" width="15">
                            </div>
                            <p class="following-value">83 Followings</p>
                        </div>
                        <div class="mentor-wrapper d-flex align-items-center">
                            <div class="mentor-icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/icons/mentor-dark.svg') }}" alt="mentor Icon" class="img-fluid" width="15">
                            </div>
                            <p class="mentor-value">5 Mentors</p>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </section>
    {{-- END SECTION CLASSES --}}

    {{-- SECTION EVENT --}}
    <section class="event section-gap">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-7 mb-3 mb-lg-0">
                <h2 class="title">Unforgettable Moments from Primakara Developer Community Events</h2>
            </div>
            <div class="col-lg-4">
                <p class="paragraph-small">Journey with us through the memories of our past events at Primakara Developer Community.</p>
            </div>
        </div>
        <div class="row content-gap" style="padding-bottom: 56px;">
            <div class="col-12">
                <div class="swiper-wrapper position-relative">
                    <div class="swiper mySwiper swiperEvent">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-event">
                                    <img src="{{ asset('assets/images/events/event-1.webp') }}" alt="Event Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-event">
                                    <img src="{{ asset('assets/images/events/event-2.webp') }}" alt="Event Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-event">
                                    <img src="{{ asset('assets/images/events/event-3.webp') }}" alt="Event Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-event">
                                    <img src="{{ asset('assets/images/events/event-4.webp') }}" alt="Event Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-event">
                                    <img src="{{ asset('assets/images/events/event-5.webp') }}" alt="Event Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-event">
                                    <img src="{{ asset('assets/images/events/event-6.webp') }}" alt="Event Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-event">
                                    <img src="{{ asset('assets/images/events/event-7.webp') }}" alt="Event Image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- END SECTION EVENT --}}

    <section class="benefit section-gap">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-7 mb-3 mb-lg-0">
                <h2 class="title">Benefits of Joining Primakara Developer Community</h2>
            </div>
            <div class="col-lg-4">
                <p class="paragraph-small">Joining our vibrant community opens the door to a world of opportunities and advantages.</p>
            </div>
        </div>
        <div class="row row-cols-md-2 row-cols-lg-4 content-gap">
            <div class="col">
                <div class="card-default">

                </div>
            </div>
        </div>
    </section>

    @include('modals.class')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiperEvent", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
            },
        });
    </script>
@endsection