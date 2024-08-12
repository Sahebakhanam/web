@extends('header')
@section('main')
    <div id="blog-section">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="blog-section-intro">
                            <h2>Read our Latest Blogs</h2>
                            <p>
                                Cras mattis consectetur purus sit amet fermentum. Donec
                                ullamcorper nulla non metus auctor fringilla.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <a class="blog-item first" href="#" title="Suspendisse potenti">
                            <div class="blog-item-img"
                                style="background-image: url(https://static.pexels.com/photos/60324/pexels-photo-60324-medium.jpeg);">
                            </div>
                            <div class="blog-item-content">
                                <span class="blog-item-label">Blog</span>
                                <span class="blog-item-date">
                                    <span class="blog-item-date-day">30</span>
                                    <span class="blog-item-date-month">Sept</span>
                                </span>
                                <h3>Nulla vehicula porttitor lorem</h3>
                                <p>
                                    Curabitur sagittis mauris ex, non congue enim sagittis et...
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a class="blog-item second" href="#" title="Suspendisse potenti">
                            <div class="blog-item-img"
                                style="background-image: url(https://static.pexels.com/photos/185764/pexels-photo-185764-medium.jpeg);">
                            </div>
                            <div class="blog-item-content">
                                <span class="blog-item-label">News</span>
                                <span class="blog-item-date">
                                    <span class="blog-item-date-day">18</span>
                                    <span class="blog-item-date-month">Aug</span>
                                </span>
                                <h3>In quis neque sed velit sodales interdum</h3>
                                <p>
                                    Sed id turpis auctor, vulputate turpis fringilla, volutpat mi.
                                    Donec felis enim...
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a class="blog-item third" href="#" title="Suspendisse potenti">
                            <div class="blog-item-img"
                                style="background-image: url(https://static.pexels.com/photos/30587/pexels-photo-30587-medium.jpg);">
                            </div>
                            <div class="blog-item-content">
                                <span class="blog-item-label">Blog</span>
                                <span class="blog-item-date">
                                    <span class="blog-item-date-day">09</span>
                                    <span class="blog-item-date-month">Aug</span>
                                </span>
                                <h3>Sed a nulla a felis imperdiet vestibulum</h3>
                                <p>
                                    Donec blandit vestibulum ipsum, eu facilisis erat. Praesent
                                    libero nulla, feugiat quis libero id...
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a class="blog-item fourth" href="#" title="Suspendisse potenti">
                            <div class="blog-item-img"
                                style="background-image: url(https://static.pexels.com/photos/116191/pexels-photo-116191-medium.jpeg);">
                            </div>
                            <div class="blog-item-content">
                                <span class="blog-item-label">News</span>
                                <span class="blog-item-date">
                                    <span class="blog-item-date-day">7</span>
                                    <span class="blog-item-date-month">Jul</span>
                                </span>
                                <h3>Vivamus convallis varius ipsum quis</h3>
                                <p>
                                    In facilisis mi sed ligula congue ullamcorper. Donec tempus
                                    porttitor ultricies...
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <div class="buttonContainer">
                            <a class="button" href="#" title="Show more"><span>Show more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
