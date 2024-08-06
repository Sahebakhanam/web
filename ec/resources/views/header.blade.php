<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ec</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">Your Logo</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="About-us.html">About us</a></li>
                    <li><a href="About-us.html">Services</a></li>
                    <li><a href="case-study-design.html">Case-Studies</a></li>
                    <li><a href="case-study-design.html">Insights</a></li>
                    <li><a href="contactpage.html">Contact</a></li>
                </ul>
                {{-- <a class="btn-getstarted" href="contactpage.html">Get Started</a> --}}
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    @yield('main')
</body>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
<script src="path/to/swiper-bundle.min.js"></script>


</html>
