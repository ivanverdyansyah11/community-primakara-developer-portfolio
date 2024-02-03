@extends('layout.main')

@section('content-page')
    {{-- SECTION HERO --}}
    <section class="hero hero-portfolio portfolio text-lg-center" id="hero">
        <div class="row justify-content-lg-center">
            <div class="col-xxl-10 d-flex flex-column align-items-lg-center">
                <h1 data-aos="fade-up" data-aos-duration="600" data-aos-delay="1400" class="headline">Explore a Tapestry of Diverse Portfolio Projects within Primakara Developer Community</h1>
                <form data-aos="fade-up" data-aos-duration="600" data-aos-delay="1550" class="w-100">
                    <input type="text" class="input-search" placeholder="Search portfolios..">
                </form>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 content-gap">
            <div class="col">
                <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="2000" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioOneModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-1.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Speaker</h6>
                    <p class="card-default-description">Introducing the Speaker Landing Page, where impactful messages find their voice. Our meticulously designed and user-friendly landing page for speakers is a gateway to communicate your expertise, showcase previous talks, and engage with your audience. Amplify your influence with a dynamic online presence that captivates and resonates.</p>
                </button>
            </div>
            <div class="col mt-4 mt-md-0">
                <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="2150" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioTwoModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-2.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Studio</h6>
                    <p class="card-default-description">Step into the Studio Landing Page, a virtual canvas for creative minds. This landing page is meticulously crafted for studios seeking an online showcase. Display your portfolio, highlight past projects, and provide a glimpse into your creative process. Elevate your studio's online identity with a visually stunning and functional space.</p>
                </button>
            </div>
            <div class="col mt-4 mt-lg-0">
                <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="2300" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioThreeModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-3.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Planner</h6>
                    <p class="card-default-description">Welcome to the Planner Landing Page - your digital organizer and event planner's paradise. Seamlessly present your planning services, highlight successful events, and engage potential clients effortlessly. With an intuitive design, this landing page is your ally in conveying the essence of meticulous event planning.</p>
                </button>
            </div>
            <div class="col mt-4 mt-xl-0">
                <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="2450" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioFourModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-4.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Personal Portfolio SPA</h6>
                    <p class="card-default-description">Experience the Personal Portfolio SPA, a serene space to showcase your skills and accomplishments. Crafted for professionals in the tech and creative industries, this Single Page Application (SPA) offers an immersive journey through your projects, skills, and experiences. Elevate your personal brand with an elegant and interactive portfolio.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button data-aos="fade-up" data-aos-duration="600" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioFiveModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-5.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page SaaS</h6>
                    <p class="card-default-description">Enter the world of innovation with the SaaS Landing Page - your gateway to software excellence. Tailored for Software as a Service (SaaS) providers, this landing page elegantly presents your product features, benefits, and customer testimonials. Capture the essence of your software solutions and engage your target audience effortlessly.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="150" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioSixModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-6.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Hiking</h6>
                    <p class="card-default-description">Embark on an adventure with the Hiking Landing Page - where the great outdoors meet digital exploration. This landing page is designed for hiking and adventure enthusiasts, providing a visual journey through scenic trails, expedition details, and upcoming events. Inspire fellow adventurers and share the thrill of the trail.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="300" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioSevenModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-7.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Heaven</h6>
                    <p class="card-default-description">Discover a slice of digital paradise with the Heaven Landing Page. Tailored for spiritual or wellness services, this landing page offers a tranquil online sanctuary. Share teachings, promote events, and foster a sense of community with a serene and inviting design. Immerse visitors in a digital haven that aligns with your spiritual vision.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="450" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioEightModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-8.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Restaurant</h6>
                    <p class="card-default-description">Savor the flavor of the Restaurant Landing Page - a feast for the eyes and the taste buds. Tailored for culinary establishments, this landing page showcases your restaurant's ambiance, menu offerings, and special events. Entice visitors with mouthwatering visuals and an easy-to-navigate design that mirrors the hospitality of your establishment.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button data-aos="fade-up" data-aos-duration="600" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioNineModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-9.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page HR Management</h6>
                    <p class="card-default-description">Step into the future of Human Resources with our HR Management Landing Page. Tailored for organizations seeking innovative solutions, this page offers a glimpse into cutting-edge HR technology and streamlined processes. Explore features such as employee onboarding, performance tracking, and collaborative workforce management. Elevate your HR capabilities and cultivate a workplace that thrives on efficiency, engagement, and seamless employee experiences.</p>
                </button>
            </div>
            <div class="col mt-4">
                <button data-aos="fade-up" data-aos-duration="600" data-aos-delay="150" type="button" class="card-default" data-bs-toggle="modal" data-bs-target="#portfolioTenModal">
                    <img src="{{ asset('assets/images/portfolios/portfolio-10.webp') }}" alt="Portfolio Image" class="img-fluid" style="width: 100%;">
                    <h6 class="card-default-title">Landing Page Company Profile</h6>
                    <p class="card-default-description">Welcome to our Company Profile Landing Page, your gateway to understanding the essence of our organization. This page provides a comprehensive overview of our company's mission, values, and key achievements. Dive into the narrative of our journey, explore our services, and understand how we deliver value to our clients. Immerse yourself in the story of our brand, where innovation meets excellence, as we invite you to explore the dynamic world of our company profile.</p>
                </button>
            </div>
        </div>
    </section>
    {{-- END SECTION HERO --}}
@endsection

@include('modals.portfolio')