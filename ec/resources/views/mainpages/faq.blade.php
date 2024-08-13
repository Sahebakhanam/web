@extends('header')
@section('main')
    <section class="hero">
        <div class="hero-section container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-detail">
                        <h1>FAQ's</h1>
                        <p>
                            We are your one-stop IT shop, offering everything from coding and bold web design to 360°
                            security and data-driven marketing strategies. Let us simplify the digital world for you.
                            Book your free strategy call now to unlock your business's full potential!
                        </p>
                        <p>
                            Yes, we do! Contact us today to schedule a free consultation and learn how our evolved IT
                            services can meet your unique business needs
                        </p>
                    </div>
                    <div class="hero-img">
                        <img src="{{ asset('assets/img/banner/faq.png') }}" class="img-fluid animated" alt="hero-img" />
                    </div>
                </div>
            </div>
    </section>
    <section>
        @foreach ($faqs as $index => $faq)
            <div class='faq'>
                <input id='faq-{{ $index }}' type='checkbox'>
                <label for='faq-{{ $index }}'>
                    <p class="faq-heading">{{ $faq->quetion }}</p>
                    <div class='faq-arrow'></div>
                    <p class="faq-text">{{ $faq->answer }}</p>
                </label>
            </div>
        @endforeach

    </section>
@endsection
