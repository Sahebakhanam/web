<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ec</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="{{ asset('assets/img/logo/logo-white.png') }}" type="image/x-icon">


</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">Your Logo</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li><a href="{{ route('addblogPage') }}" class="">Blog</a></li>
                    <li><a href="{{ route('addfaq') }}" class="">FAQ's</a></li>
                    <li><a href="{{ route('showcontact') }}" class="">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    @yield('dashboard')
</body>

</html>
