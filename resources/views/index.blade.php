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
                    <div class="swiper-pagination swiper-pagination-event"></div>
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

    {{-- SECTION PORTFOLIO --}}
    <section class="portfolio section-gap">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-7 mb-3 mb-lg-0">
                <h2 class="title">Primakara Developer Community Project Portfolio</h2>
            </div>
            <div class="col-lg-4">
                <p class="paragraph-small">Dive into the diverse world of creativity and innovation within the Primakara Developer Community.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 content-gap">
            <div class="col">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioOneModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-1.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Speaker</h6>
                    <p class="card-default-description">Introducing the Speaker Landing Page, where impactful messages find their voice. Our meticulously designed and user-friendly landing page for speakers is a gateway to communicate your expertise, showcase previous talks, and engage with your audience. Amplify your influence with a dynamic online presence that captivates and resonates.</p>
                </button>
            </div>
            <div class="col mt-4 mt-md-0">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioTwoModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-2.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Studio</h6>
                    <p class="card-default-description">Step into the Studio Landing Page, a virtual canvas for creative minds. This landing page is meticulously crafted for studios seeking an online showcase. Display your portfolio, highlight past projects, and provide a glimpse into your creative process. Elevate your studio's online identity with a visually stunning and functional space.</p>
                </button>
            </div>
            <div class="col mt-4 mt-lg-0">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioThreeModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-3.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Planner</h6>
                    <p class="card-default-description">Welcome to the Planner Landing Page - your digital organizer and event planner's paradise. Seamlessly present your planning services, highlight successful events, and engage potential clients effortlessly. With an intuitive design, this landing page is your ally in conveying the essence of meticulous event planning.</p>
                </button>
            </div>
            <div class="col mt-4 mt-xl-0">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioFourModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-4.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Personal Portfolio SPA</h6>
                    <p class="card-default-description">Experience the Personal Portfolio SPA, a serene space to showcase your skills and accomplishments. Crafted for professionals in the tech and creative industries, this Single Page Application (SPA) offers an immersive journey through your projects, skills, and experiences. Elevate your personal brand with an elegant and interactive portfolio.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioFiveModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-5.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page SaaS</h6>
                    <p class="card-default-description">Enter the world of innovation with the SaaS Landing Page - your gateway to software excellence. Tailored for Software as a Service (SaaS) providers, this landing page elegantly presents your product features, benefits, and customer testimonials. Capture the essence of your software solutions and engage your target audience effortlessly.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioSixModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-6.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Hiking</h6>
                    <p class="card-default-description">Embark on an adventure with the Hiking Landing Page - where the great outdoors meet digital exploration. This landing page is designed for hiking and adventure enthusiasts, providing a visual journey through scenic trails, expedition details, and upcoming events. Inspire fellow adventurers and share the thrill of the trail.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioSevenModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-7.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Heaven</h6>
                    <p class="card-default-description">Discover a slice of digital paradise with the Heaven Landing Page. Tailored for spiritual or wellness services, this landing page offers a tranquil online sanctuary. Share teachings, promote events, and foster a sense of community with a serene and inviting design. Immerse visitors in a digital haven that aligns with your spiritual vision.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioEightModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-8.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Restaurant</h6>
                    <p class="card-default-description">Savor the flavor of the Restaurant Landing Page - a feast for the eyes and the taste buds. Tailored for culinary establishments, this landing page showcases your restaurant's ambiance, menu offerings, and special events. Entice visitors with mouthwatering visuals and an easy-to-navigate design that mirrors the hospitality of your establishment.</p>
                </button>
            </div>
        </div>
        <div class="row content-gap">
            <div class="col-12 d-flex justify-content-center">
                <a href="#" class="button-primary d-flex align-items-center">
                    <span>More Portoflio</span>
                    <div class="arrow-dark"></div>
                </a>
            </div>
        </div>
    </section>
    {{-- END SECTION PORTFOLIO --}}

    {{-- SECTION TESTIMONIAL --}}
    <section class="testimonial section-gap">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-7 mb-3 mb-lg-0">
                <h2 class="title">Voices of Primakara Developer, Member Testimonials</h2>
            </div>
            <div class="col-lg-4">
                <p class="paragraph-small">Discover the impact of community through the voices of our members.</p>
            </div>
        </div>
        <div class="row content-gap" style="padding-bottom: 56px;">
            <div class="col-12">
                <div class="swiper-wrapper position-relative">
                    <div class="swiper mySwiper swiperTestimonial">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-default text-center d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/images/testimonials/testimonial-1.webp') }}" alt="Testimonial Image" class="img-fluid" width="52">
                                    <p class="card-default-description">"The collaborative atmosphere and wealth of resources have accelerated my learning journey in ways I couldn't have imagined."</p>
                                    <h6 class="username">Devina Putri</h6>
                                    <p class="job">Software Engineer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-default text-center d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/images/testimonials/testimonial-2.webp') }}" alt="Testimonial Image" class="img-fluid" width="52">
                                    <p class="card-default-description">“Primakara Developer Community is more than just a network; it's a catalyst for professional growth.”</p>
                                    <h6 class="username">Putra Hartawan</h6>
                                    <p class="job">Information Systems</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-default text-center d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/images/testimonials/testimonial-3.webp') }}" alt="Testimonial Image" class="img-fluid" width="52">
                                    <p class="card-default-description">“Primakara Developer Community is a dynamic ecosystem that nurtures creativity and innovation.”</p>
                                    <h6 class="username">Aditya Prayatna</h6>
                                    <p class="job">Software Engineer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-default text-center d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/images/testimonials/testimonial-4.webp') }}" alt="Testimonial Image" class="img-fluid" width="52">
                                    <p class="card-default-description">“Being a member of Primakara Developer Community has been a transformative experience.”</p>
                                    <h6 class="username">Ayu Adistie</h6>
                                    <p class="job">Software Engineer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-default text-center d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/images/testimonials/testimonial-5.webp') }}" alt="Testimonial Image" class="img-fluid" width="52">
                                    <p class="card-default-description">"The collaborative spirit and diverse projects have not only expanded my technical skills."</p>
                                    <h6 class="username">Desta Manakan</h6>
                                    <p class="job">Information Systems</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-default text-center d-flex flex-column align-items-center">
                                    <img src="{{ asset('assets/images/testimonials/testimonial-6.webp') }}" alt="Testimonial Image" class="img-fluid" width="52">
                                    <p class="card-default-description">"The community's commitment to knowledge-sharing and collaboration is unmatched."</p>
                                    <h6 class="username">Alice Alicia</h6>
                                    <p class="job">Software Engineer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- END SECTION TESTIMONIAL --}}

    {{-- SECTION FAQ --}}
    <section class="faq section-gap">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-7 mb-3 mb-lg-0">
                <h2 class="title">Frequently Asked Questions About Primakara Developer</h2>
            </div>
            <div class="col-lg-4">
                <p class="paragraph-small">Have questions about Primakara Developer Community? We've got answers.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 content-gap">
            <div class="col">
                <button type="button" class="card-default card-faq show">
                    <div class="card-wrapper d-flex align-items-center justify-content-between gap-4">
                        <h6 class="card-default-title">How can I join Primakara Developer Community?</h6>
                        <div class="arrow-icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/icons/arrow-down-dark.svg') }}" alt="Arrow Down Dark" class="img-fluid" width="10">
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="card-default-description">To join Primakara Developer Community, simply navigate to our website and look for the 'Join Now' button. Follow the registration process, and you'll become a part of our dynamic community.</p>
                    </div>
                </button>

                <button type="button" class="card-default card-faq mt-4">
                    <div class="card-wrapper d-flex align-items-center justify-content-between gap-4">
                        <h6 class="card-default-title">What resources are available for learning and skill development?</h6>
                        <div class="arrow-icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/icons/arrow-down-dark.svg') }}" alt="Arrow Down Dark" class="img-fluid" width="10">
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="card-default-description">Primakara offers a rich set of resources, including workshops, tutorials, and learning materials. Access these resources through the 'Learning Hub' to enhance your skills and stay updated on the latest industry trends.</p>
                    </div>
                </button>

                <button type="button" class="card-default card-faq mt-4">
                    <div class="card-wrapper d-flex align-items-center justify-content-between gap-4">
                        <h6 class="card-default-title">Are there networking opportunities within the community?</h6>
                        <div class="arrow-icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/icons/arrow-down-dark.svg') }}" alt="Arrow Down Dark" class="img-fluid" width="10">
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="card-default-description">Absolutely! Primakara hosts regular events, webinars, and meetups, providing ample opportunities to connect with industry professionals, mentors, and fellow developers.</p>
                    </div>
                </button>

                <button type="button" class="card-default card-faq mt-4">
                    <div class="card-wrapper d-flex align-items-center justify-content-between gap-4">
                        <h6 class="card-default-title">How can I stay updated on community events and announcements?</h6>
                        <div class="arrow-icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/icons/arrow-down-dark.svg') }}" alt="Arrow Down Dark" class="img-fluid" width="10">
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="card-default-description">Stay informed by regularly checking the 'Events' section on our platform. Additionally, subscribe to our newsletter for regular updates, announcements, and exclusive content delivered directly to your inbox.</p>
                    </div>
                </button>
            </div>
            <div class="col mt-4 mt-lg-0">
                <button type="button" class="card-default card-faq">
                    <div class="card-wrapper d-flex align-items-center justify-content-between gap-4">
                        <h6 class="card-default-title">How can I contribute to projects within the community?</h6>
                        <div class="arrow-icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/icons/arrow-down-dark.svg') }}" alt="Arrow Down Dark" class="img-fluid" width="10">
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="card-default-description">Contributing to projects is easy! Explore the 'Projects' section, express your interest, and join ongoing initiatives. Engage with project leaders and fellow members to bring your skills and ideas to the table.</p>
                    </div>
                </button>

                <button type="button" class="card-default card-faq mt-4">
                    <div class="card-wrapper d-flex align-items-center justify-content-between gap-4">
                        <h6 class="card-default-title">How can I showcase my own projects on the community platform?</h6>
                        <div class="arrow-icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/icons/arrow-down-dark.svg') }}" alt="Arrow Down Dark" class="img-fluid" width="10">
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="card-default-description">Members can showcase their projects by submitting them to the community platform. Head to the 'Project Portfolio' section, follow the guidelines, and present your projects to the Primakara community.</p>
                    </div>
                </button>

                <button type="button" class="card-default card-faq mt-4">
                    <div class="card-wrapper d-flex align-items-center justify-content-between gap-4">
                        <h6 class="card-default-title">Is there a mentorship program available for community members?</h6>
                        <div class="arrow-icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/icons/arrow-down-dark.svg') }}" alt="Arrow Down Dark" class="img-fluid" width="10">
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="card-default-description">Yes, Primakara offers a mentorship program. Members interested in mentorship can express their interest, and we'll connect you with experienced mentors within the community.</p>
                    </div>
                </button>

                <button type="button" class="card-default card-faq mt-4">
                    <div class="card-wrapper d-flex align-items-center justify-content-between gap-4">
                        <h6 class="card-default-title">Is there a membership fee to join Primakara Developer Community?</h6>
                        <div class="arrow-icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/icons/arrow-down-dark.svg') }}" alt="Arrow Down Dark" class="img-fluid" width="10">
                        </div>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="card-default-description">No, membership in Primakara Developer Community is free. We believe in fostering an inclusive environment where developers can collaborate and learn without any financial barriers.</p>
                    </div>
                </button>
            </div>
        </div>
    </section>
    {{-- END SECTION FAQ --}}

    {{-- SECTION CTA --}}
    <section class="cta section-gap position-relative">
        <div class="style-one"></div>
        <div class="style-two"></div>
        <div class="row justify-content-center position-relative">
            <div class="col-11 col-lg-10 text-lg-center d-flex flex-column align-items-lg-center justify-content-lg-center">
                <h1 class="headline">Unlock Your Potential with Primakara Developer Community</h1>
                <p class="paragraph">Join a thriving community of passionate developers at Primakara. Whether you're a seasoned coder or just starting your journey, our community offers a dynamic space to collaborate, learn, and innovate.</p>
                <div class="button-group d-flex">
                    <a href="#" class="button-primary">
                        <span>Join the Community</span>
                    </a>
                    <a href="#" class="button-reverse">
                        <span>Explore Projects</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- END SECTION CTA --}}

    @include('modals.class')
    @include('modals.benefit')
    @include('modals.portfolio')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @push('script')
        <script>
            const buttonSmall = document.querySelectorAll('.button-small');
            const paragraphAbout = document.querySelector('.paragraph-about');
            const paragraphOne = document.querySelector('.paragraph-one');
            const paragraphTwo = document.querySelector('.paragraph-two');

            const cardFaq = document.querySelectorAll('.card-faq');

            cardFaq.forEach(card => {
                card.addEventListener('click', function() {
                    if (!card.classList.contains('show')) {
                        const cardFaqShow = document.querySelector('.card-faq.show');
                        cardFaqShow.classList.remove('show');
                        card.classList.add('show');
                    }
                })
            }); 

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

            const swiperEvent = new Swiper(".swiperEvent", {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: ".swiper-pagination-event",
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                },
            });

            const swiperTestimonial = new Swiper(".swiperTestimonial", {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: ".swiper-pagination-testimonial",
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                },
            });
        </script>
    @endpush
@endsection