<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') : Al Khaleej Real Estate LLC &#8211; Dubai&#039;s Trusted Real Estate</title>
    <meta name="author" content="Realar">
    <meta name="description" content="Al Khaleej Real Estate LLC &#8211; Dubai&#039;s Trusted Real Estate">
    <meta name="keywords" content="Realar - Real Estate Apartment Complex HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png"> --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon.png')}}">
    {{-- <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> --}}

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
   <!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- Fontawesome Icon -->
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" >
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" > --}}
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
<!-- Swiper Js -->
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style-min.css') }}">

{!! htmlScriptTagJsApi() !!}

</head>

<body class="">



    <!--==============================
     Preloader
  ==============================-->
    <div id="preloader" class="preloader reduceSize">
        <div id="loader" class="th-preloader">
            <div class="animation-preloader blob">
                <img src="{{asset('/assets/al-khaleej-logo.jpg')}}" width="250px" height="150px" alt="animated logo" width="200px">
            </div>
        </div>
    </div> <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper onepage-nav reduceSize">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('assets/al-khaleej-logo.jpg')}}"  width="250px" height="150px"  alt="Realar">
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="{{route('home')}}">
                            Home
                        </a></li>
                    <li><a href="{{route('aboutus')}}">
                            About Us
                        </a></li>

                    {{-- <li class="menu-item-has-children">
                        <a href="{{route('properties')}}">
                            Properties
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('properties')}}">
                                    Residential
                                </a></li>
                            <li><a href="{{route('properties')}}">
                                    Commercial
                                </a></li>
                        </ul>
                    </li> --}}

                    <li><a href="{{route('projects')}}">
                    PROPERTY
                    </a></li>

                    <li><a href="{{route('agents')}}">
                        Agent
                    </a></li>

                    <li><a href="{{route('blogs')}}">
                        Blogs
                    </a></li>

                    <li><a href="{{route('contactus')}}">
                        Contact Us
                    </a></li>

                    <li><a href="{{route('inquiry')}}">
                        Inquiry
                    </a></li>

                    {{-- <li><a href="{{route('listyourproperty')}}">
                        List Your Property
                    </a></li> --}}

                </ul>
            </div>


        </div>
    </div><!--==============================
 Header Area
==============================-->
    <header class="th-header header-layout2 reduceSize">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container th-container2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/al-khaleej-logo.jpg')}}" width="250px" height="150px" alt="Al Khaleej Real Estate Dubai">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto d-flex">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="{{route('home')}}">
                                            HOME
                                        </a></li>
                                    <li><a href="{{route('aboutus')}}">
                                            ABOUT US
                                        </a></li>


                                    {{-- <li class="menu-item-has-children">
                                        <a href="{{route('properties')}}">
                                            PROPERTIES
                                        </a>
                                        <ul class="sub-menu">
                                            @foreach ($category as $data)
                                            <li class="menu-item-has-children"><a href="{{ route('propertiestype', ['type' => Str::slug($data->name) ]) }}">
                                                {{ strtoupper($data->name) }}
                                            </a>
                                            <ul class="sub-menu">
                                                @foreach ($data->subCategories as $subCategory)
                                                <li><a href="{{ route('propertiestype', ['type' => Str::slug($data->name),'subtype' => Str::slug($subCategory->name) ]) }}">
                                                    {{ strtoupper($subCategory->name) }}
                                                </a></li>
                                                @endforeach
                                            </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{route('projects')}}">
                                    PROPERTY
                                        </a></li>
                                    <li><a href="{{route('agents')}}">
                                            AGENTS
                                        </a></li>
                                    <li><a href="{{route('blogs')}}">
                                            BLOGS
                                        </a></li>
                                    <li><a href="{{route('contactus')}}">
                                            CONTACT US
                                        </a></li>
                                </ul>
                            </nav>
                            <div class="header-button d-flex d-lg-none">
                                <button type="button" class="th-menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>

                        </div>
                        <div class="col-auto d-none d-xxl-block">
                            <div class="header-button">
                                <a href="{{route('inquiry')}}" class="th-btn style2 th-btn-icon">INQUIRY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    @yield('section-wrapper')




    <div class="th-modal modal fade reduceSize" id="advancefilters" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="icon-btn btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></button>
                    <div class="page-single bg-gray">
                        <div class="appointment-wrap2">
                            <h2 class="form-title text-theme">Advance Filter</h2>
                            <form action="mail.php" method="POST" class="appointment-form ajax-contact">
                                <div class="row">
                                    <div class="form-group style-border style-radius col-12">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Keyword">
                                        <i class="fal fa-search"></i>
                                    </div>

                                    <div class="form-group style-border style-radius col-md-6">
                                        <select name="subject" id="subject" class="form-select">
                                            <option value="Real Estate">Residencial</option>
                                            <option value="Apartment">Commercial</option>
                                        </select>
                                        <i class="fal fa-angle-down"></i>
                                    </div>

                                    <div class="form-group style-border style-radius col-md-6">
                                        <select name="subject" id="subject" class="form-select">
                                            <option value="Real Estate">Offer Type</option>
                                            <option value="Apartment">Commercial</option>
                                        </select>
                                        <i class="fal fa-angle-down"></i>
                                    </div>

                                    <div class="form-group style-border style-radius col-md-3">
                                        <select name="subject" id="subject" class="form-select">
                                            <option value="" disabled selected hidden>Cities</option>
                                            <option value="Real Estate">All</option>
                                            <option value="Real Estate">Dubai</option>
                                            <option value="Apartment">Sharjah</option>
                                            <option value="Apartment">Ajman</option>
                                            <option value="Apartment">Abu Dhabi</option>
                                        </select>
                                        <i class="fal fa-angle-down"></i>
                                    </div>
                                    <div class="form-group style-border style-radius col-md-3">
                                        <select name="subject" id="subject" class="form-select">
                                            <option value="" disabled selected hidden>Room Count</option>
                                            <option value="Real Estate">Any</option>
                                            <option value="Real Estate">1</option>
                                            <option value="Apartment">2</option>
                                            <option value="Apartment">3</option>
                                            <option value="Apartment">4</option>
                                            <option value="Apartment">5</option>
                                        </select>
                                        <i class="fal fa-angle-down"></i>
                                    </div>

                                    <div class="form-group style-border style-radius col-md-3">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Min. Area">
                                        <i class="fal fa-location"></i>
                                    </div>

                                    <div class="form-group style-border style-radius col-md-3">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Max. Area">
                                        <i class="fal fa-location"></i>
                                    </div>

                                    <h4 class="form-title text-theme mt-2">Other Features</h4>
                                </div>

                                <div class="row ">
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="AirConditioning" checked>
                                        <label class="form-check-label" for="AirConditioning">
                                        Air Conditioning
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Barbeque" checked>
                                        <label class="form-check-label" for="Barbeque">
                                        Barbeque
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Dryer" checked>
                                        <label class="form-check-label" for="Dryer">
                                       Dryer
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Gym" checked>
                                        <label class="form-check-label" for="Gym">
                                       Gym
                                        </label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Laundry" checked>
                                        <label class="form-check-label" for="Laundry">
                                        Laundry
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Lawn" checked>
                                        <label class="form-check-label" for="Lawn">
                                        Lawn
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Microwave" checked>
                                        <label class="form-check-label" for="Microwave">
                                       Microwave
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Outdoor Shower" checked>
                                        <label class="form-check-label" for="Outdoor Shower">
                                       Outdoor Shower
                                        </label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Refrigerator" checked>
                                        <label class="form-check-label" for="Refrigerator">
                                        Refrigerator
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Sauna" checked>
                                        <label class="form-check-label" for="Sauna">
                                        Sauna
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="SwimmingPool" checked>
                                        <label class="form-check-label" for="SwimmingPool">
                                       Swimming Pool
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Outdoor Shower" checked>
                                        <label class="form-check-label" for="TV">
                                     TV Cable
                                        </label>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Washer" checked>
                                        <label class="form-check-label" for="Washer">
                                            Washer
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="WiFi" checked>
                                        <label class="form-check-label" for="WiFi">
                                            WiFi
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="WindowCoverings" checked>
                                        <label class="form-check-label" for="WindowCoverings">
                                       Window Coverings
                                        </label>
                                    </div>
                                    <div class="col-md-3 pt-2">
                                        <input class="" type="checkbox" value="" id="Outdoor Shower" checked>
                                        <label class="form-check-label" for="TV">
                                     TV Cable
                                        </label>
                                    </div>
                                </div>

                                <p class="form-messages mb-0 mt-3"></p>

                                <button type="submit" style="width: 100%; margin-top: 35px;" class="th-btn style-border2  th-btn-icon" >Search</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-wrapper footer-layout2 bg-white reduceSize">
        <div class="container th-container2">
            <div class="footer-wrap space-top">
                <div class="newsletter-wrap">
                    <h5 class="newsletter-title">Newsletter To Get Updated The Latest News</h5>
                    <form action="#" class="newsletter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Email">
                        </div>
                        <button class="th-btn style3">Subscribe Now <i class="far fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="widget-area">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xl-4">
                            <div class="widget footer-widget">
                                <div class="th-widget-about">
                                    <div class="about-logo">
                                        <a href="{{route('home')}}"><img src="{{asset('assets/al-khaleej-logo.jpg')}}" width="250px" height="150px" alt="Al Khaleej Real Estate Dubai"
                                                width="200px"></a>
                                    </div>
                                    <p class="about-text">You can reach us anytime via calls or messages, or by visiting our office. We aim to respond to all inquiries within one business day. We are dedicated to assisting you with your questions.</p>
                                    <div class="th-social style3">
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Get In Touch</h3>
                                <div class="th-widget-contact">
                                    <div class="info-box_text">
                                        <div class="icon"><img src="{{asset('assets/img/icon/location-dot.svg')}}"
                                                alt="img"></div>
                                        <div class="details">
                                            <p>Ajman - United Arab Emirates</p>
                                            <!-- <p>Oud Metha, Dubai, U.A.E</p> -->
                                        </div>
                                    </div>
                                    <div class="info-box_text">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/icon/phone.svg')}}" alt="img">
                                        </div>
                                        <div class="details">
                                          <!-- <p class="about-contact-details-text"><a href="tel:01234567890">(04) 834 3914</a></p> -->
                        <p class="about-contact-details-text"><a href="tel:+971505032480">+971 50 50 32480</a></p>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-box_text">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/icon/envelope.svg')}}" alt="img">
                                        </div>
                                        <div class="details">
                                            <p><a href="mailto:mailinfo00@realar.com"
                                                    class="info-box_link">Khaleejestate@gmail.com</a></p>
                                            <!-- <p><a href="mailto:support24@realar.com"
                                                    class="info-box_link">support@gfsrealestate.ae</a></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Useful Link</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        {{-- <li><a href="{{route('listyourproperty')}}">List Your Porperty</a></li> --}}
                                        <li><a href="{{route('inquiry')}}">Enquiry</a></li>
                                        <li><a href="{{route('blogs')}}">Blogs</a></li>
                                        <li><a href="{{route('contactus')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Explore</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="property.html">Abu Dhabi</a></li>
                                        <li><a href="team.html">Ajman</a></li>
                                        <li><a href="property.html">Ras AL Khaimah</a></li>
                                        <li><a href="about.html">Sharjah</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-wrap bg-black">
            <div class="container th-container2">
                <div class="row gy-2 align-items-center ">
                    <div class="col-lg-6">
                        <p class="copyright-text">
                            Copyright <i class="fal fa-copyright"></i> 2024 <a href="/">Al Khaleej Real Estate</a>, All
                            rights reserved.</p>
                            <p class="copyright-text">Developed & Managed By: Silicon Softs</p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="footer-links">
                            <ul>
                                <li><a href="{{route('termandconditions')}}">Terms of service</a></li>
                                <li><a href="{{route('privacypolicy')}}">Privacy policy</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
   Code End  Here
 ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top reduceSize">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{asset('assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
    <!-- Swiper Js -->
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter Up -->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Range Slider -->
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Gsap -->
    <script src="{{asset('assets/js/gsap.min.js')}}"></script>

    <!-- Main Js File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @yield('scripts')
</body>


</html>
