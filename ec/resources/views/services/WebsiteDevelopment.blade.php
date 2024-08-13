@extends('header')
@section('main')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="section hero">
            <div class="website-hero">
                <div class="hero-detail">
                    <h1>Website Development</h1>
                    <p>
                        Welcome to our blog, where we explore the latest trends and insights in the world of IT and
                        digital innovation. Whether it's cutting-edge web design, robust security measures, or
                        data-driven marketing strategies, our expert team shares valuable tips and knowledge to help
                        you stay ahead in the digital landscape. Dive into our articles and discover how to unlock
                        your business's full potential with our comprehensive IT solutions.
                    </p>
                    <div class="hero-buttons">
                        <button><a href="index.html#about" class="btn-get-started">Get a Quote</a></button>
                    </div>
                </div>
                <div class="website-hero-img">
                    <div class=" services-hero-img">
                        <img src="../assets/img/banner/hero4.png" class="img-fluid animated" alt="hero-img" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <section id="extra-services">
            <div class="section-title">
                <h2>Portfolios</h2>
                <p>
                    At Webiste IT Solutions, we go the extra mile to ensure our clients
                    receive the best service possible. Here’s what sets us apart:
                </p>
            </div>
            <!-- fist case studies  -->
            <div class="responsive-container-block bigContainer">
                <div class="responsive-container-block Container">
                    <div class="responsive-container-block leftSide">
                        <p class="text-blk heading">MMDD</p>
                        <p class="text-blk subHeading">
                            Semaj Africa is an online education platform that delivers video
                            courses, programs and resources for Individual, Advertising
                            &amp; Media Specialist, Online Marketing Professionals,
                            Freelancers and anyone looking to pursue a career in digital
                            marketing, Accounting, Web development, Programming. Multimedia
                            and CAD design.
                        </p>
                        <div class="hero-buttons">
                            <button><a href="index.html#about" class="btn-get-started">Know More</a></button>
                        </div>
                    </div>
                    <div class="responsive-container-block rightSide">
                        <img class="number5img" src="../assets/img/portfolio/case-studies/wdg4.png" />
                        <img class="number7img" src="../assets/img/portfolio/case-studies/wdg5.png" />
                        <img class="number6img" src="../assets/img/portfolio/case-studies/wdg1.png" />
                    </div>
                </div>
            </div>
            <!-- second cas-studies  -->

            <div class="responsive-container-block bigContainer">
                <div class="responsive-container-block Container">
                    <div class="responsive-container-block rightSide">
                        <img class="number1img" src="../assets/img/portfolio/culenz/culenz3.png" />
                        <img class="number6img" src="../assets/img/portfolio/culenz/culenz1.png" />
                    </div>
                    <div class="responsive-container-block leftSide">
                        <p class="text-blk heading">MMDD</p>
                        <p class="text-blk subHeading">
                            Semaj Africa is an online education platform that delivers video
                            courses, programs and resources for Individual, Advertising
                            &amp; Media Specialist, Online Marketing Professionals,
                            Freelancers and anyone looking to pursue a career in digital
                            marketing, Accounting, Web development, Programming. Multimedia
                            and CAD design.
                        </p>
                        <div class="hero-buttons">
                            <button><a href="index.html#about" class="btn-get-started">Know More</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner section  -->
            <!-- <div class="company-values">
                                                                                                                                                <img src="../assets/img/banner/values.png" alt="values" />
                                                                                                                                              </div> -->
        </section>
        <!-- technology row  -->
        <section class="technologies">
            <div class="section-title">
                <h2>Features</h2>
                <p>Why Businesses Choose Us for Their Web Development Needs</p>
            </div>
            {{-- <div class="video_scroll">
                <!-- first line  -->
                <div class="video_scroll_effect_1">
                    <div class="wrapper_1">
                        <div>
                            <div class="col-lg-3 col-md-4">
                                <div class="features-item">
                                    <i class="bi bi-projector" style="color: #ffbb2c"></i>
                                    <h3>
                                        <a href="" class="stretched-link">Streamlined Project Management</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- End Feature Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="features-item">
                                    <i class="bi bi-tags" style="color: #5578ff"></i>
                                    <h3>
                                        <a href="" class="stretched-link">Crystal-Clear Pricing</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- End Feature Item -->

                            <div class="col-lg-3 col-md-4">
                                <div class="features-item">
                                    <i class="bi bi-alarm" style="color: #e80368"></i>
                                    <h3>
                                        <a href="" class="stretched-link">On-Time Delivery</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- End Feature Item -->

                            <div class="col-lg-3 col-md-4" data-aos-delay="400">
                                <div class="features-item">
                                    <i class="bi bi-telephone" style="color: #e361ff"></i>
                                    <h3>
                                        <a href="" class="stretched-link">Ongoing Support</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- End Feature Item -->
                        </div>
                    </div>
                </div>
                <!-- second line / -->
                <div class="video_scroll_effect">
                    <div class="wrapper">
                        <div>
                            <div class="col-lg-3 col-md-4" data-aos-delay="500">
                                <div class="features-item">
                                    <i class="bi bi-eye" style="color: #47aeff"></i>
                                    <h3>
                                        <a href="" class="stretched-link">Tailored Solutions for Your Unique
                                            Vision</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- End Feature Item -->

                            <div class="col-lg-3 col-md-4" data-aos-delay="600">
                                <div class="features-item">
                                    <i class="bi bi-star" style="color: #ffa76e"></i>
                                    <h3>
                                        <a href="" class="stretched-link">Expertise You Can Trust</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- End Feature Item -->

                            <div class="col-lg-3 col-md-4" data-aos-delay="700">
                                <div class="features-item">
                                    <i class="bi bi-x-diamond" style="color: #11dbcf"></i>
                                    <h3>
                                        <a href="" class="stretched-link">Top-Tier Security and Data Protection</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- End Feature Item -->

                            <div class="col-lg-3 col-md-4" data-aos-delay="800">
                                <div class="features-item">
                                    <i class="bi bi-camera-video" style="color: #4233ff"></i>
                                    <h3>
                                        <a href="" class="stretched-link">Innovation Beyond Aesthetics</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- End Feature Item -->
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>

        <!-- technology row end  -->

        <!-- how Section -->
        <section id="services" class="services section">
            <!-- how Title -->
            <div class="section-title">
                <h2>How a Website Can Increase Your Business</h2>
                <p>A website can significantly boost your business by</p>
            </div>
            <!-- End Section Title -->

            <div class="increase-buriness-section">
                <div class="website-increase-business">
                    <div class="website-business">
                        <div class="service-item">
                            <div class="icon">
                                <img src="../assets/img/icons//web-design-services/1.png" alt="website" />
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Reaching a Wider Audience</a>
                            </h4>
                            <p>
                                Extend your market reach beyond your local customer base with
                                a website. Reach out to potential customers across the world
                                and give your business global opportunities.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="website-business">
                        <div class="service-item">
                            <div class="icon">
                                <img src="../assets/img/icons//web-design-services/2.png" alt="app" />
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Improving Customer Service</a>
                            </h4>
                            <p>
                                Provide easy access to information and support. A
                                well-designed website will provide customers with easy access
                                to FAQs, support resources, and contact information, among
                                other services.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="website-business">
                        <div class="service-item">
                            <div class="icon">
                                <img src="../assets/img/icons//web-design-services/3.png" alt="ecommerce" />
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Product/Service Display</a>
                            </h4>
                            <p>
                                Show and describe your products/services informatively and
                                beautifully. Represent your products/services in an attractive
                                and detailed manner that helps the customer make an informed
                                decision.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="website-business">
                        <div class="service-item">
                            <div class="icon">
                                <img src="../assets/img/icons//web-design-services/4.png" alt="ecommerce" />
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">E-commerce Support</a>
                            </h4>
                            <p>
                                Facilitate sales and transactions online. Provide a
                                straightforward method for sales and transactions online so
                                that customers can make purchases from your website at any
                                time.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
                <div class="website-increase-business">
                    <div class="website-business">
                        <div class="service-item">
                            <div class="icon">
                                <img src="../assets/img/icons//web-design-services/5.png" alt="ecommerce" />
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Build Credibility</a>
                            </h4>
                            <p>
                                Show you're trustworthy and professional. A professional
                                website with customer testimonials and case studies can do
                                wonders for the credibility and reputation of your business.
                            </p>
                        </div>
                    </div>
                    <div class="website-business">
                        <div class="service-item">
                            <div class="icon">
                                <img src="../assets/img/icons//web-design-services/6.png" alt="ecommerce" />
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Marketing and Promotion</a>
                            </h4>
                            <p>
                                Use web marketing techniques. Incorporate SEO, content
                                marketing, and social media to bring traffic to your site and
                                market your business effectively.
                            </p>
                        </div>
                    </div>
                    <div class="website-business">
                        <div class="service-item">
                            <div class="icon">
                                <img src="../assets/img/icons//web-design-services/7.png" alt="ecommerce" />
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Customer Data Collection</a>
                            </h4>
                            <p>
                                Get insights that matter to improve marketing. Use forms and
                                analytics tools to collect the needed data from visitors and
                                understand client behavior to fine-tune your marketing
                                efforts.
                            </p>
                        </div>
                    </div>
                    <div class="website-business">
                        <div class="service-item">
                            <div class="icon">
                                <img src="../assets/img/icons//web-design-services/8.png" alt="ecommerce" />
                            </div>
                            <h4>
                                <a href="service-details.html" class="stretched-link">Customer Engagement</a>
                            </h4>
                            <p>
                                Build strong customer relationships with blogs, newsletters,
                                and interactive features. Keep your audience engaged through
                                blogs, newsletters, and interactive features to build a base
                                of loyal customers.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>

            </div>
        </section>
        <!-- /how Section -->

        <!-- banner  -->
        <section>
            <div class="section-title">
                <img src="../assets/img/banner/websitequote.png" class="img-fluid animated" alt="banner" />
            </div>
        </section>
        <!-- banner end  -->

        <!-- timeline start -->

        @include('services.timeline')
        <!-- timeline end  -->
    </main>
@endsection
