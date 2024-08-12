@extends('header')
@section('main')
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
    <section>

        <div class='faq'>
            <input id='faq-a' type='checkbox'>
            <label for='faq-a'>
                <p class="faq-heading">Is this Dropbox upgrade safe?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">It is completely safe and totally legal! There will is no record of this process to your
                    shared Dropbox users.</p>
            </label>
            <input id='faq-b' type='checkbox'>
            <label for='faq-b'>
                <p class="faq-heading">How long does it take to upgrade my Dropbox?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">Upgrading is a slow process and will take around 3-10 days. <strong>In order to control
                        the
                        risk and secure the space you earned, we will gradually process it.</strong> during this time you
                    can
                    still use your account as normal as usual.</p>
            </label>
            <input id='faq-c' type='checkbox'>
            <label for='faq-c'>
                <p class="faq-heading">What do you need to do the upgrade?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">NO ACCESS TO YOUR PERSONAL ACCOUNT OR INFO IS REQUIRED! All I need from you is your
                    Dropbox
                    referral link.</p>
            </label>
            <input id='faq-d' type='checkbox'>
            <label for='faq-d'>
                <p class="faq-heading">Where do I find my personal Dropbox referral link?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">Log in to the Dropbox website and get your referral link: www.dropbox.com/referral. Copy
                    the
                    link (example link: <strong>https://db.tt/xYxYzyXy</strong>) and send it via eBay message.</p>
            </label>
            <input id='faq-e' type='checkbox'>
            <label for='faq-e'>
                <p class="faq-heading">Can I split the purchased space between several accounts?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">Yes, you can! Just send me all the referral links during the checkout process, including
                    a
                    short note, what account should receive which amount of space.</p>
            </label>
        </div>
    </section>
@endsection
