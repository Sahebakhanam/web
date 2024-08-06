@extends('header')
@section('main')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-section container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-detail">
                        <h1>one-stop IT shop</h1>
                        <p>
                            We cover everything from code and clicks to 360 total security, bold web design solutions up to
                            data-driven marketing strategies - we take the complexity out of Digital for you. Book your Free
                            Strategy Call now to unlock the full potential of your business! IT Services Evolved. Contact Us
                            Today To Schedule A Free Consultation!
                        </p>
                        <div class="hero-buttons">
                            <a href="index.html#about" class="btn-get-started">Get a Quote</a>
                        </div>
                    </div>
                    <div class="hero-img">
                        <img src="{{ asset('assets/img/banner/hero1.webp') }}" class="img-fluid animated" alt="hero-img" />
                    </div>
                </div>
            </div>
    </section>
    <!-- /Hero Section -->

    {{-- about section start --}}
    <section class="section about">
        <div class="about-container container">
            <div class="about-content-wrapper">
                <div class="solution_slider">
                    <div class="solution_gallery">
                        <img src="assets/img/banner/home/appd.webp" alt="appdevelopment" />
                        <img src="assets/img/banner/home/graphic.webp" alt="graphic design" />
                        <img src="assets/img/banner/home/seo.webp" alt="SEO" />
                        <img src="assets/img/banner/home/smm.webp" alt="smm" />
                        <img src="assets/img/banner/home/ui.webp" alt="ui/ux" />
                        <img src="assets/img/banner/home/websited.webp" alt="website-development" />
                    </div>
                </div>

                <div class="about-content">
                    <h3>
                        Transformative Innovation Ensuring Your IT Partner of Future Trillions Makingsvenience
                    </h3>
                    <p>Your IT Partner</p>
                    <p>
                        Building a Secure Digital Edge If you want to compete in the digital age, then having an IT backbone
                        is the key. Here as ELEMENT CODERS, we are not a service provider but your trusted partner to help
                        you go through the Technology Maze. Simply put, when you deploy our #CTOaaS model with a squad
                        consisting of security cleared and industry-certified experts with innovation hardwired into their
                        DNA - your business will win!
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- about section ends  --}}

    {{-- serviec section start --}}
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="section-title">
            <h2>Services</h2>
            <p></p>
        </div>
        <!-- End Section Title -->

        <div class="services-container">
            <div class="service-item">
                <div class="icon">
                    <img src="assets/img/icons/index-icon/service1.png" alt="website" />
                </div>
                <h4>
                    <a href="service-details.html" class="stretched-link">Website Development</a>
                </h4>
                <p>
                    Design your site — numbers of infinite possibilities! We design resources that are aesthetic and
                    user-friendly, satiating the interests of your staff and customers. Our unique approach customizes to
                    individual needs and presents your company's goods and services as attractive offers.
                </p>
            </div>
            <!-- End Service Item -->

            <div class="service-item">
                <div class="icon">
                    <img src="assets/img/icons/index-icon/service2.png" alt="app" />
                </div>
                <h4>
                    <a href="service-details.html" class="stretched-link">App Development</a>
                </h4>
                <p>
                    Mobile app developer needed? We develop high-quality, fresh mobile apps for various needs. With a
                    specialty in Native, Cross-Platform, and Hybrid applications, we ensure the strength of your app while
                    also making it engaging to users.
                </p>
            </div>
            <!-- End Service Item -->

            <div class="service-item">
                <div class="icon">
                    <img src="assets/img/icons/index-icon/service3.png" alt="ecommerce" />
                </div>
                <h4>
                    <a href="service-details.html" class="stretched-link">Ecommerce</a>
                </h4>
                <p>
                    Trust us: we do have experienced online store developers who build architectures that will take on the
                    increased activity and, at the same time, are easy to operate. It doesn't take much, and you get
                    whatever you want.
                </p>
            </div>
            <!-- End Service Item -->

            <div class="service-item">
                <div class="icon">
                    <img src="assets/img/icons/index-icon/service4.png" alt="AI development" />
                </div>
                <h4>
                    <a href="service-details.html" class="stretched-link">AI Development</a>
                </h4>
                <p>
                    The experts in AI development are experienced and design intelligent systems to cope with increased
                    complexity, being user-friendly. It does not take much, and you get whatever you need.
                </p>
            </div>
            <!-- End Service Item -->

            <div class="service-item">
                <div class="icon">
                    <img src="assets/img/icons/index-icon/service5.png" alt="maintenance" />
                </div>
                <h4>
                    <a href="service-details.html" class="stretched-link">Maintenance & Support</a>
                </h4>
                <p>
                    Trust that the online store developers we have are experienced in building architected online stores
                    that can handle increased activity and are easy to operate. It doesn't take much, and you get whatever
                    you need.
                </p>
            </div>
            <!-- End Service Item -->

            <div class="service-item">
                <div class="icon">
                    <img src="assets/img/icons/index-icon/service6.png" alt="saas" />
                </div>
                <h4>
                    <a href="service-details.html" class="stretched-link">SaaS</a>
                </h4>
                <p>
                    Mobcoder excels in crafting SaaS applications to boost business scalability. Our expert team transforms
                    your vision into robust, cloud-based solutions using cutting-edge technology and innovative strategies.
                    From concept to deployment, we ensure your SaaS applications are scalable and exceed expectations,
                    providing seamless and powerful cloud solutions.
                </p>
            </div>
            <!-- End Service Item -->

            <div class="service-item">
                <div class="icon">
                    <img src="assets/img/icons/index-icon/service7.png" alt="ui/ux" />
                </div>
                <h4>
                    <a href="service-details.html" class="stretched-link">UI/UX Design</a>
                </h4>
                <p>
                    We create user interfaces and experiences for websites, SaaS applications, and mobile apps, focusing on
                    current trends and your business goals. Our designs are intuitive, engaging, and blend functionality
                    with aesthetics to achieve your objectives and captivate your audience.
                </p>
            </div>
            <!-- End Service Item -->

            <div class="service-item">
                <div class="icon">
                    <img src="assets/img/icons/index-icon/service8.png" alt="Software Development" />
                </div>
                <h4>
                    <a href="service-details.html" class="stretched-link">Software Development</a>
                </h4>
                <p>
                    We specialize in creating custom software solutions tailored to your needs, from UI design to SaaS and
                    web development. Our team leverages the latest technologies to build robust, scalable, and user-friendly
                    applications that drive business success. Whether you're looking to develop a new platform or enhance an
                    existing one, we deliver solutions that are innovative, efficient, and aligned with your goals.
                </p>
            </div>
            <!-- End Service Item -->
        </div>
    </section>

    {{-- service section ends  --}}
    {{-- banner  --}}
    <section>
        <div class="banner-section container">
            <img class="banner-image" src="assets/img/banner/vr.png" alt="banner" />
        </div>
    </section>

    {{-- technologies we serves start --}}
    <section class="technologies">
        <div class="section-title">
            <h2>Technologies We Serves</h2>
        </div>
        <div class="video_scroll">
            <!-- first line  -->
            <div class="video_scroll_effect_1">
                <div class="wrapper_1">
                    <div class="scroll-div">
                        <img src="assets/img/logo/1.webp" alt="tech" />
                        <img src="assets/img/logo/2.webp" alt="tech" />
                        <img src="assets/img/logo/3.webp" alt="tech" />
                        <img src="assets/img/logo/4.webp" alt="tech" />
                    </div>
                    <div class="scroll-div">
                        <img src="assets/img/logo/5.webp" alt="tech" />
                        <img src="assets/img/logo/6.webp" alt="tech" />
                        <img src="assets/img/logo/7.webp" alt="tech" />
                        <img src="assets/img/logo/8.webp" alt="tech" />
                    </div>
                </div>
            </div>
            <!-- second line / -->
            <div class="video_scroll_effect">
                <div class="wrapper">
                    <div class="scroll-div"> <img src="assets/img/logo/12.webp" alt="tech" />
                        <img src="assets/img/logo/13.webp" alt="tech" />
                        <img src="assets/img/logo/14.webp" alt="tech" />
                        <img src="assets/img/logo/15.webp" alt="tech" />
                    </div>
                    <div class="scroll-div"><img src="assets/img/logo/16.webp" alt="tech" />
                        <img src="assets/img/logo/17.webp" alt="tech" />
                        <img src="assets/img/logo/18.webp" alt="tech" />
                        <img src="assets/img/logo/19.webp" alt="tech" />
                    </div>
                    <div class="scroll-div"> <img src="assets/img/logo/20.webp" alt="tech" />
                        <img src="assets/img/logo/21.webp" alt="tech" />
                        <img src="assets/img/logo/22.webp" alt="tech" />
                    </div>
                </div>
            </div>

            <!-- third line  -->
            <div class="video_scroll_effect_1">
                <div class="wrapper_1">
                    <div class="scroll-div"><img src="assets/img/logo/23.webp" alt="tech" />
                        <img src="assets/img/logo/24.webp" alt="tech" />
                        <img src="assets/img/logo/25.webp" alt="tech" />
                        <img src="assets/img/logo/26.webp" alt="tech" />
                    </div>
                    <div class="scroll-div"><img src="assets/img/logo/27.webp" alt="tech" />
                        <img src="assets/img/logo/28.webp" alt="tech" />
                        <img src="assets/img/logo/29.webp" alt="tech" />
                        <img src="assets/img/logo/30.webp" alt="tech" />
                    </div>
                    <div class="scroll-div"> <img src="assets/img/logo/31.webp" alt="tech" />
                        <img src="assets/img/logo/32.webp" alt="tech" />
                        <img src="assets/img/logo/33.webp" alt="tech" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- technologies we serves ends  --}}

    {{-- portfolio section  --}}

    {{-- testimonial start  --}}
    @include('testimonial')
    @include('faq-s')
@endsection
