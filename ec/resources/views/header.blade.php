<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ec</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="{{ asset('assets/img/logo/logo-white.png') }}" type="image/x-icon">

</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('assets/img/logo/logoblack.png') }}" class="img-fluid animated" alt="hero-img" />
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="{{ url('/') }}" class="">Home</a>
                    </li>
                    {{-- <li><a href="{{ route('/about') }}" class="{{ Request::routeIs('/about') ? 'active' : '' }}">About
                            us</a></li> --}}
                    <li><a href="#" class="">Services</a></li>
                    <li><a href="#" class="">Case-Studies</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Insights</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('showBlogs') }}">Blog</a>
                            <a href="{{ route('faq') }}">FAQ's</a>
                        </div>
                    </li>
                    <li><a href="{{ route('contactPage') }}"
                            class="{{ Request::routeIs('contactPage') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    @yield('main')

    {{-- footer  --}}
    <div class="pg-footer">
        <footer class="footer">
            <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100"
                preserveAspectRatio="none">
                <path class="footer-wave-path"
                    d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z">
                </path>
            </svg>
            <div class="footer-content">
                <div class="footer-content-column">
                    <div class="footer-logo">
                        <a class="footer-logo-link" href="#">
                            <span class="hidden-link-text"></span>
                            <img style="width: 100%" src="{{ asset('assets/img/logo/logo-white.png') }}"
                                class="img-fluid animated" alt="hero-img" />
                        </a>
                    </div>
                    <div class="footer-call-to-action">
                        <h2 class="footer-call-to-action-title"> You Call Us</h2>
                        <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link"
                                href="tel:0124-64XXXX" target="_self"> +91-98877-10153 </a></p>
                    </div>
                </div>
                <div class="footer-content-column">
                    <div class="footer-menu">
                        <h2 class="footer-menu-name"> Company</h2>
                        <ul id="menu-company" class="footer-menu-list">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('contactPage') }}">Contact</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('career') }}">Careers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <h2 class="footer-menu-name"> Legal</h2>
                        <ul id="menu-legal" class="footer-menu-list">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-170434">
                                <a href="{{ route('privacyPolicy') }}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-content-column">
                    <div class="footer-menu">
                        <h2 class="footer-menu-name"> Quick Links</h2>
                        <ul id="menu-quick-links" class="footer-menu-list">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a target="_blank" rel="noopener noreferrer" href="{{ route('contactPage') }}">Support
                                    Center</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('faq') }}">FAQ's</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                <a href="{{ route('showBlogs') }}">Blog</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                                <a href="#">Case-Studies</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="footer-content-column">
                    <div class="footer-call-to-action">
                        {{-- <h2 class="footer-call-to-action-title"> Let's Chat</h2> --}}
                        <p class="footer-call-to-action-description"> Have a support question?</p>
                        <a href="{{ route('contactPage') }}"><button>Get in Touch</button></a>
                    </div>

                </div>
                <div class="footer-social-links"> <svg class="footer-social-amoeba-svg"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
                        <path class="footer-social-amoeba-path"
                            d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z">
                        </path>
                    </svg>
                    <a class="footer-social-link linkedin" href="https://www.linkedin.com/company/element-coders/"
                        target="_blank">
                        <span class="hidden-link-text">Linkedin</span>
                        <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                            <path class="footer-social-icon-path"
                                d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z">
                            </path>
                        </svg>
                    </a>
                    <a class="footer-social-link twitter" href="https://x.com/ElementCoders" target="_blank">
                        <span class="hidden-link-text">Twitter</span>
                        <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                            <path class="footer-social-icon-path"
                                d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219 ">
                            </path>
                        </svg>
                    </a>
                    <a class="footer-social-link instagram"
                        href="https://www.instagram.com/element_coders?igsh=bXBhcDN2ZWYxMzQ4" target="_blank">
                        <span class="hidden-link-text">Instagram</span>
                        <img style="width: 100%" src="{{ asset('assets/img/logo/instagram.svg') }}"
                            class="img-fluid animated" alt="hero-img" />

                    </a>
                    <a class="footer-social-link github" href="https://www.facebook.com/element.coders"
                        target="_blank">
                        <span class="hidden-link-text">Facebook</span>
                        <img style="width: 100%" src="{{ asset('assets/img/logo/fb.svg') }}"
                            class="img-fluid animated" alt="hero-img" />
                    </a>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="footer-copyright-wrapper">
                    <p class="footer-copyright-text">
                        <a class="footer-copyright-link" href="#" target="_self"> ©2024. | Designed By:
                            elementcoders. | All rights reserved. </a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
<script src="path/to/swiper-bundle.min.js"></script>


</html>
