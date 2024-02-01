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

    {{-- SECTION BENEFIT --}}
    <section class="benefit section-gap">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-7 mb-3 mb-lg-0">
                <h2 class="title">Benefits of Joining Primakara Developer Community</h2>
            </div>
            <div class="col-lg-4">
                <p class="paragraph-small">Joining our vibrant community opens the door to a world of opportunities and advantages.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 content-gap">
            <div class="col">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#benefitOneModal">
                    <div class="benefit-icon d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/benefits/benefit-1.svg') }}" alt="Benefit Icon" class="img-fluid" width="24">
                    </div>
                    <h6 class="card-default-title">Collaborative Learning</h6>
                    <p class="card-default-description">Engage in collaborative projects and group activities, fostering an environment where knowledge is shared freely, and members learn from each other's experiences.</p>
                </button>
            </div>
            <div class="col mt-4 mt-md-0">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#benefitTwoModal">
                    <div class="benefit-icon d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/benefits/benefit-2.svg') }}" alt="Benefit Icon" class="img-fluid" width="24">
                    </div>
                    <h6 class="card-default-title">Exclusive Access to Resources</h6>
                    <p class="card-default-description">Gain access to a wealth of exclusive resources, including workshops, tutorials, and cutting-edge materials, designed to empower you with the latest skills and insights in the fast-paced world of technology.</p>
                </button>
            </div>
            <div class="col mt-4 mt-lg-0">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#benefitThreeModal">
                    <div class="benefit-icon d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/benefits/benefit-3.svg') }}" alt="Benefit Icon" class="img-fluid" width="24">
                    </div>
                    <h6 class="card-default-title">Networking Opportunities</h6>
                    <p class="card-default-description">Connect with a diverse network of industry professionals, mentors, and fellow developers. Build meaningful relationships that can open doors to new opportunities, collaborations, and career advancements.</p>
                </button>
            </div>
            <div class="col mt-4 mt-lg-0">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#benefitFourModal">
                    <div class="benefit-icon d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/images/benefits/benefit-4.svg') }}" alt="Benefit Icon" class="img-fluid" width="24">
                    </div>
                    <h6 class="card-default-title">Community Support</h6>
                    <p class="card-default-description">Experience the power of community support. Seek advice, share challenges, and receive mentorship from experienced developers within the Primakara community. Accelerate your learning and career growth with the guidance of seasoned professionals.</p>
                </button>
            </div>
        </div>
    </section>
    {{-- END SECTION BENEFIT --}}

    {{-- SECTION ABOUT --}}
    <section class="about section-gap">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <h2 class="title">Empowering Innovators, Connecting Creators: The Primakara Developer Community Story</h2>
                <div class="scroll-button">
                    <div class="button-group d-flex">
                        <button type="button" class="button-small button-history active">
                            <span>Definition & History</span>
                        </button>
                        <button type="button" class="button-small button-vission">
                            <span>Vission & Mission</span>
                        </button>
                        <button type="button" class="button-small button-goal">
                            <span>Purpose & Goals</span>
                        </button>
                    </div>
                </div>
                <div class="paragraph-group paragraph-about">
                    <p class="paragraph-small paragraph-one">At Primakara Developer Community, we believe in the transformative power of collaboration and code. Our community is a vibrant hub where developers, creators, and innovators converge to share knowledge, and build projects.</p>
                    <p class="paragraph-small paragraph-two">Discover the essence of Primakara, where passion meets proficiency, and where every line of code contributes to a collective journey of digital excellence.</p>
                </div>
                <div class="fact-wrapper">
                    <div class="row row-cols-2 row-cols-md-4 justify-content-between align-items-center">
                        <div class="col fact-item">
                            <h1 class="item-value">361+</h1>
                            <p class="item-caption">Total Followings</p>
                        </div>
                        <div class="col fact-item">
                            <h1 class="item-value">15+</h1>
                            <p class="item-caption">Total Mentors</p>
                        </div>
                        <div class="col fact-item mt-4 mt-md-0">
                            <h1 class="item-value">03+</h1>
                            <p class="item-caption">Total Class Learning</p>
                        </div>
                        <div class="col fact-item mt-4 mt-md-0">
                            <h1 class="item-value">24+</h1>
                            <p class="item-caption">Total Organized</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 d-none d-lg-inline-block">
                <img src="{{ asset('assets/images/about/banner-about.svg') }}" alt="About Banner Image" class="img-fluid" style="width: 100%;">
            </div>
        </div>
    </section>
    {{-- END SECTION ABOUT --}}

    @include('modals.class')
    @include('modals.benefit')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @push('script')
        <script>
            const buttonSmall = document.querySelectorAll('.button-small');
            const buttonHistory = document.querySelector('.button-history');
            const buttonVission = document.querySelector('.button-vission');
            const buttonGoal = document.querySelector('.button-goal');

            const paragraphAbout = document.querySelector('.paragraph-about');
            const paragraphOne = document.querySelector('.paragraph-one');
            const paragraphTwo = document.querySelector('.paragraph-two');

            buttonSmall.forEach(button => {
                button.addEventListener('click', function() {
                    if (!button.classList.contains('active')) {
                        const buttonActive = document.querySelector('.button-small.active');
                        buttonActive.classList.remove('active');

                        button.classList.add('active');
                        paragraphAbout.classList.add('hide');

                        setTimeout(() => {
                            if (button.classList.contains('button-history')) {
                                paragraphOne.innerHTML = 'At Primakara Developer Community, we believe in the transformative power of collaboration and code. Our community is a vibrant hub where developers, creators, and innovators converge to share knowledge, and build projects.';
                                paragraphTwo.innerHTML = 'Discover the essence of Primakara, where passion meets proficiency, and where every line of code contributes to a collective journey of digital excellence.';
                            } else if (button.classList.contains('button-vission')) {
                                paragraphOne.innerHTML = 'At Primakara Developer, our vision is to empower a global community of developers, fostering a collaborative environment that drives innovation and excellence in technology.';
                                paragraphTwo.innerHTML = 'Our mission is to provide a dynamic platform where developers can learn, connect, and contribute to impactful projects. By nurturing a culture of continuous learning and collaboration, we strive to be a catalyst for positive change in the digital landscape. Join us as we collectively shape the future of technology.';
                            } else if (button.classList.contains('button-goal')) {
                                paragraphOne.innerHTML = 'At Primakara Developer, our purpose is to create a vibrant and inclusive space where developers thrive in innovation and collaboration. We envision a community-driven by a shared passion for technology and a commitment to continuous learning.';
                                paragraphTwo.innerHTML = 'Our goals include fostering a culture of knowledge-sharing, providing valuable resources, and building a supportive environment where every developer can achieve their full potential. Join us in our journey to advance skills, create meaningful connections, and contribute to the ever-evolving world of technology.';
                            }
                            
                            paragraphAbout.classList.remove('hide');
                        }, '500');
                    }
                })
            });

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
    @endpush
@endsection