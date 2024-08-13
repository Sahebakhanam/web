@extends('header')
@section('main')
    <div id="blog-section">
        <section class="hero">
            <div class="hero-section container">
                <div class="hero-content">
                    <div class="hero-text">
                        <div class="hero-detail">
                            <h1>BLOG</h1>
                            <p>
                                Welcome to our blog, where we explore the latest trends and insights in the world of IT and
                                digital innovation. Whether it's cutting-edge web design, robust security measures, or
                                data-driven marketing strategies, our expert team shares valuable tips and knowledge to help
                                you stay ahead in the digital landscape. Dive into our articles and discover how to unlock
                                your business's full potential with our comprehensive IT solutions.
                            </p>
                        </div>
                        <div class="hero-img">
                            <img src="{{ asset('assets/img/banner/hero3.png') }}" class="img-fluid animated" alt="hero-img" />
                        </div>
                    </div>
                </div>
        </section>
        <section>
            <div class="container">
                <div>
                    <div>
                        <div class="blog-section-intro">
                            <h2>our Latest Blogs</h2>
                            <p>
                                Read Here
                            </p>
                        </div>
                    </div>
                    @foreach ($blogs as $blog)
                        <div class="projcard-container">

                            <div class="projcard projcard-blue">
                                <div class="projcard-innerbox">
                                    <img class="projcard-img" src="{{ asset($blog->main_image) }}"
                                        alt="{{ $blog->main_heading }}" />
                                    <div class="projcard-textbox">
                                        <div class="projcard-title">{{ $blog->main_heading }}</div>
                                        @foreach ($blog->subContents as $subContent)
                                            <div class="projcard-subtitle">{{ $subContent->subheading }}</div>
                                            <div class="projcard-bar"></div>
                                            <div class="projcard-description">{{ $subContent->description }}</div>
                                        @endforeach
                                        <div class="projcard-tagbox">
                                            <span class="projcard-tag">By Element Coders</span>
                                            <a href="{{ route('blog_detail', $blog->id) }}" class="btn btn-primary">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <div>
                        <div class="buttonContainer">
                            <a class="button" href="#" title="Show more"><span>Show more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
