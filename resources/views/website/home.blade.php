@extends('website.layout')

@section('title', 'Home')

@section("section-wrapper")

<div class="page-container">


<div class="th-hero-wrapper hero-3 reduceSize" id="hero" data-bg-src="{{asset('assets/project_img/002.jpg')}}">
    <video preload="none" id="hero-video" class="hero-video" poster="{{asset('assets/project_img/002.jpg')}}" muted="false" loop="true">
        <source src="{{asset('assets/backgroundvideo.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <div class="row gy-5 justify-content-center">
            <div class="col-12">
                <div class="hero-style3 text-center">
                    {{-- <div class="btn-wrap justify-content-center">
                        @foreach ($category as $data)
                        <a href="{{ route('propertiestype', ['type' => Str::slug($data->name) ]) }}" class="th-btn style-border2  th-btn-icon"> {{ $data->name }}</a>
                        @endforeach
                        <a href="{{route('projects')}}" class="th-btn style-border2 th-btn-icon">Properties</a>
                    </div> --}}
                    <h1 class="hero-title text-white">
                        Experience The Harmonious Blend Of Luxury
                    </h1>
                 
                    {{-- <div class="mt-4">
                        <a href="property.html"data-bs-toggle="modal" data-bs-target="#advancefilters" class="th-btn style-border th-btn-icon">Advance Filters</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>


<section class=" overflow-hidden reduceSize" id="property-sec" style="padding: 30px 0px; margin-top: 50px;">
    <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="40%" data-right="1%">
        <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
    </div>
    <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="35%" data-left="0%">
        <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
    </div>
    <div class="container th-container2">
        <div class="row justify-content-between align-items-center">
            <div class="col-xxl-5 col-lg-8">
                <div class="title-area">

                    <h2 class="sec-title">Finest Properties </h2>
                    <p class="text-theme">Imagine waking up in the home you've always dreamed of. <br> With us, this dream can become a reality.</p>
                </div>
            </div>

            <div class="col-auto">
                <div class="sec-btn">
                    <a href="{{route('projects')}}" class="th-btn style2 th-btn-icon">View More</a>
                </div>
            </div>
        </div>
        <div class="tab-content property-tab-content position-relative">
            <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
                <div class="row">
                    @foreach ($projects->slice(0, 3) as $data)
                    <div class="col-md-4 col-xl-4 pt-4">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                                <a href="{{ route('projectsdetails', ['slug' => $data->slug]) }}">
                                    <img src="{{asset('/'.$data->thumbnail_image)}}" alt="{{$data->project_name}}">
                                </a>
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('projectsdetails', ['slug' => $data->slug]) }}">{{$data->project_name}}</a></h4>
                                    <h5 class="property-card-price">{{$data->price}}</h5>
                                    <p class="property-card-location">{{$data->project_address}}</p>
                                </div>
                                <div class="image-right img-shine">
                                    <img src="{{asset('/'.$data->developer_image)}}" alt="img">
                                </div>
                            </div>
                            <div class="btn-wrap mt-3">
                                <a href="{{ route('projectsdetails', ['slug' => $data->slug]) }}" class="th-btn style-border2 th-btn-icon" style="width: 100%">Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

</section>

<div class="th-hero-wrapper hero-2 reduceSize" id="hero">
    <div class="container th-container2">
        <div class="swiper th-slider hero-slider1" id="heroSlide1" data-slider-options='{"effect":"fade","loop":false,"thumbs":{"swiper":".hero-grid-thumb"}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="row gx-60 gy-50">
                            <div class="col-xl-5" >
                                <div class="hero-thumb2-1">
                                    <img src="{{asset('assets/dubai_elevation_new.jpg')}}" alt="img">
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="hero-style2">
                                    <h1 class="hero-title">
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                            We Shape the Future  </span>
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.5s">
                                            of Living in Dubai </span>
                                    </h1>
                                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.6s">Al Khaleej Real Estate Dubai offers a diverse range of premium projects designed to cater to various customer needs and preferences. GFS ensures top-notch quality and modern amenities in every project, from luxury apartments and villas to commercial spaces. Each development is strategically located to provide convenience, comfort, and a superior lifestyle.</p>
                                    <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="{{route('projects')}}" class="th-btn style2 th-btn-icon">Explore Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="row gx-60 justify-content-end ">
            <div class="col-xl-7">
                <div class="slider-area hero-slider-thumb-wrap">
                    <div class="swiper th-slider hero-grid-thumb" data-slider-options='{"effect":"slide","loop":false,"slidesPerView":"3"}'>
                        <div class="swiper-wrapper">
                            @foreach ($projects as $data )
                            <div class="swiper-slide">
                                    <a href="{{ route('projectsdetails', ['slug' => $data->slug]) }}">
                                    <div class="box-img">
                                        <img src="{{asset('/'.$data->thumbnail_image)}}" alt="{{$data->project_name}}">
                                        <span class="slider-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button data-slider-prev="#heroSlide1" class="slider-arrow style2"><img src="assets/img/icon/arrow-left.svg" alt="img"></button>
                    <button data-slider-next="#heroSlide1" class="slider-arrow style2 slider-next"><img src="assets/img/icon/arrow-right.svg" alt="img"></button>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-bg-shape2-1 spin shape-mockup" data-top="14%" data-left="1%">
        <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
    </div>
</div>

<div class="counter-area-2 bg-gray overflow-hidden reduceSize">
    <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="9%" data-right="-3%">
        <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
    </div>
    <div class="sec-bg-shape2-2 wave-anim shape-mockup d-xl-block d-none" data-top="19%" data-left="2%" data-bg-src="assets/img/shape/section_shape_2_2.jpg">
    </div>
    <div class="container">
        <div class="counter-card-wrap space">
            <div class="counter-card style2">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">20</span>+</h2>
                    <p class="box-text">YEARS OF EXPERIENCES</p>
                </div>
            </div>
            <div class="counter-card style2">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">270</span>+</h2>
                    <p class="box-text">PROJECTS</p>
                </div>
            </div>
            <div class="counter-card style2">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">85</span>+</h2>
                    <p class="box-text">TEAM MEMBERS</p>
                </div>
            </div>
            <div class="counter-card style2">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">1200</span>+</h2>
                    <p class="box-text">SATISFIED CLIENTS</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <section class="space overflow-hidden reduceSize" id="property-sec">
    <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="40%" data-right="1%">
        <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
    </div>
    <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="35%" data-left="0%">
        <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
    </div>
    <div class="container th-container2">
        <div class="row justify-content-between align-items-center">
            <div class="col-xxl-5 col-lg-8">
                <div class="title-area">
                    <h2 class="sec-title">Featured Listings</h2>
                    <p class="text-theme">Imagine waking up in the home you've always dreamed of. <br> With us, this dream can become a reality.</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <ul class="nav nav-tabs property-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent-tab-pane" type="button" role="tab" aria-controls="rent-tab-pane" aria-selected="true">Rent</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy-tab-pane" type="button" role="tab" aria-controls="buy-tab-pane" aria-selected="false">Buy</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content property-tab-content position-relative">
            <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
                <div class="slider-area property-slider2 slider-drag-wrap">
                    <div class="swiper th-slider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1500":{"slidesPerView":"4"}},"spaceBetween":"32","grabCursor":"true","slideToClickedSlide":"true"}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                        <img src="{{asset('assets/416x400n.jpeg')}}" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="assets/img/icon/property-icon1-1.svg" alt="img">Bed 4</span>
                                        <span><img src="assets/img/icon/property-icon1-2.svg" alt="img">Bath 2</span>
                                        <span><img src="assets/img/icon/property-icon1-3.svg" alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-card-details">
                                        <div class="media-left">
                                            <h4 class="property-card-title"><a href="property-details.html">Town Houses</a></h4>
                                            <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                            <p class="property-card-location">California</p>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> --}}


<section class="service-area-3 space overflow-hidden reduceSize">
    <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="-2%" data-right="30%">
        <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
    </div>
    <div class="container th-container2">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="title-area">
                    <h2 class="sec-title text-theme">Perfect Solutions For Every Need</h2>
                    <p class="text-theme">Our meticulously designed community embodies a unique blend of eco-friendly living and convenience, standing as a testament to sustainable development.</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="{{route('projects')}}" class="th-btn style2 th-btn-icon">Browse All Properties</a>
                </div>
            </div>
        </div>
        <div class="swiper th-slider service-slider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"4"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="service-card style3">
                        <div class="service-card-icon">
                            <img src="assets/img/icon/property-icon1-3.svg" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="property-details.html">Office</a></h3>
                        <p class="box-text">Al Khaleej Real Estate Dubai offers state-of-the-art office spaces designed to meet modern business needs, featuring cutting-edge facilities and prime locations for optimal convenience and productivity.</p>
                        <div class="service-img img-shine">
                            <img src="{{asset('assets/project_img/001.jpg')}}" alt="img">
                            <a href="property-details.html" class="icon-btn">
                                <img src="assets/img/icon/arrow-right.svg" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-card style3">
                        <div class="service-card-icon">
                            <img src="assets/img/icon/property-icon1-3.svg" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="property-details.html">Shop</a></h3>
                        <p class="box-text">Al Khaleej Real Estate Dubai provides premium retail spaces with modern amenities and prime locations, ideal for businesses seeking high visibility and customer accessibility.</p>
                        <div class="service-img img-shine">
                            <img src="{{asset('assets/project_img/004.jpg')}}" alt="img">
                            <a href="property-details.html" class="icon-btn">
                                <img src="assets/img/icon/arrow-right.svg" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-card style3">
                        <div class="service-card-icon">
                            <img src="assets/img/icon/property-icon1-3.svg" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="property-details.html">Apartment</a></h3>
                        <p class="box-text">Al Khaleej Real Estate Dubai offers luxurious apartments featuring modern designs, top-notch amenities, and prime locations for a sophisticated and comfortable living experience.</p>
                        <div class="service-img img-shine">
                            <img src="{{asset('assets/project_img/003.jpg')}}" alt="img">
                            <a href="property-details.html" class="icon-btn">
                                <img src="assets/img/icon/arrow-right.svg" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-card style3">
                        <div class="service-card-icon">
                            <img src="assets/img/icon/property-icon1-3.svg" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="property-details.html">Villas</a></h3>
                        <p class="box-text">Al Khaleej Real Estate Dubai presents exquisite villas that combine luxury, spacious living, and modern amenities in prime locations, perfect for a refined lifestyle.</p>
                        <div class="service-img img-shine">
                            <img src="{{asset('assets/project_img/002.jpg')}}" alt="img">
                            <a href="property-details.html" class="icon-btn">
                                <img src="assets/img/icon/arrow-right.svg" alt="img">
                            </a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="slider-pagination"></div>
        </div>
    </div>
</section>

<div class="overflow-hidden space reduceSize" id="about-sec">
    <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="9%" data-right="13%">
        <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
    </div>
    <div class="container th-container2">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-xl-7 mb-50 mb-xl-0">
                <div class="img-box2">
                    <div class="slider-area">
                        <div class="swiper th-slider about-thumb-slider" id="aboutSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1","effect":"fade"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"350","depth":"215","modifier":"1"},"centeredSlides":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img1">
                                        <img src="{{asset('assets/project_img/002.jpg')}}" alt="About">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img1">
                                        <img src="{{asset('assets/project_img/001.jpg')}}" alt="About">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img1">
                                        <img src="{{asset('assets/project_img/003.jpg')}}" alt="About">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img1">
                                        <img src="{{asset('assets/project_img/004.jpg')}}" alt="About">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img1">
                                        <img src="{{asset('assets/project_img/005.jpeg')}}" alt="About">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img1">
                                        <img src="{{asset('assets/project_img/006.jpg')}}" alt="About">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img1">
                                        <img src="{{asset('assets/project_img/007.jpg')}}" alt="About">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button data-slider-next="#aboutSlider1" class="slider-arrow slider-next"><img src="assets/img/icon/arrow-right.svg" alt="icon"></button>
                    </div>
                    <div class="about-tag">
                        {{-- <div class="about-experience-tag">
                            <span class="circle-title-anime">Al Khaleej Real Estate Dubai * LLC</span>
                        </div> --}}
                        <a href="https://youtu.be/JGJKDFx450c?si=FGtHeXF4TnzNrAly" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="title-area mb-32">
                    <h2 class="sec-title style2">About Us</h2>
                    <p class="sec-text">Welcome to Al Khaleej Real Estate Dubai, your premier destination for luxury living and exceptional real estate opportunities. With over 20 years of experience in the real estate sector, we are a leading name in the Dubai property market, renowned for our dedication to quality, innovation, and excellence in the field of real estate development.</p>
                </div>
                <div class="about-wrap2">
                    <div class="checklist style2">
                        <ul>
                            <li><img src="assets/img/icon/checkmark.svg" alt="img">Quality real estate services</li>
                            <li><img src="assets/img/icon/checkmark.svg" alt="img">100% satisfaction guarantee</li>
                            <li><img src="assets/img/icon/checkmark.svg" alt="img">Highly professional team</li>
                            <li><img src="assets/img/icon/checkmark.svg" alt="img">Timely dealings</li>
                        </ul>
                    </div>
                    <div class="call-btn">
                        <div class="icon-btn">
                            <img src="assets/img/icon/phone.svg" alt="img">
                        </div>
                        <div class="btn-content">
                            <h6 class="btn-title">Call Us 24/7</h6>
                            <span class="btn-text"><a href="tel:0123456789">(04) 834 3914</a></span>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap mt-5">
                    <a href="about.html" class="th-btn style2 th-btn-icon">More About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="space  overflow-hidden bg-gray reduceSize">
    <div class="sec-bg-shape2-3 jump shape-mockup d-xxl-block d-none " data-bottom="0%" data-left="1%">
        <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
    </div>
    <div class="container th-container2">
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-xxl-4 col-lg-6">
                <div class="title-area">
                    <h2 class="sec-title ">Meet Our Agents</h2>
                    <p class="text-theme">Realar help you easily create a real estate trading website. With the function Register, Login, Post real estate news.</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="{{route('agents')}}" class="th-btn style2 th-btn-icon">View all Agents</a>
                </div>
            </div>
        </div>
        <div class="slider-area team-slider3">
            <div class="swiper th-slider slider-drag-wrap" id="teamSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}},"grabCursor":"true"}'>
                <div class="swiper-wrapper">
                  @foreach ($agents as $data)
                  <div class="swiper-slide">
                    <div class="th-team team-card style3">
                        <div class="img-wrap">
                            <div class="team-img">
                                <img src="{{asset('/'.$data->profile_image)}}"" alt="Team">
                            </div>
                        </div>
                        <div class="team-card-content">
                            <div class="media-left">
                                <h3 class="box-title"><a href="team-details.html">{{$data->name}}</a></h3>
                                <span class="team-desig">{{$data->descignation}}</span>
                            </div>
                            <a class="icon-btn" href="tel:{{$data->phone_number}}"><img src="assets/img/icon/phone.svg" alt="img"></a>
                        </div>
                    </div>
                </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden space reduceSize">
    <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="2%" data-left="-1%">
        <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
    </div>
    <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="-1%" data-right="10%">
        <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
    </div>
    <div class="container th-container2">
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-xxl-6 col-lg-7">
                <div class="title-area">
                    <h2 class="sec-title text-theme">What Our Customers Says</h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slider-prev="#testiSlider3" class="slider-arrow style5 default slider-prev"><img src="assets/img/icon/arrow-left.svg" alt=""></button>
                        <button data-slider-next="#testiSlider3" class="slider-arrow style5 default slider-next"><img src="assets/img/icon/arrow-right.svg" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="swiper th-slider testi-slider3" id="testiSlider3" data-slider-options='{"spaceBetween":"32","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"},"1400":{"slidesPerView":"3"}},"centeredSlides": "true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testi-card style3">
                        <p class="testi-card_text">"I had an incredible experience with Al Khaleej Real Estate Dubai. From the initial consultation to the final transaction, their team was professional, knowledgeable, and attentive. They helped me find the perfect apartment in a prime location, and I couldn't be happier with my new home. Highly recommend!"</p>
                        <div class="testi-grid_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-card_profile">
                            <div class="quote-icon">
                                <img src="assets/img/icon/qoute.svg" alt="icon">
                            </div>
                            <div class="testi-card_profile-details">
                                <h3 class="testi-card_name">Sarah Umer</h3>
                                <span class="testi-card_desig">Property Expert</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testi-card style3">
                        <p class="testi-card_text">"As a Dubai native, I've seen many real estate companies come and go, but Al Khaleej Real Estate Dubai truly stands out. Their dedication to customer satisfaction is unparalleled. They managed my property efficiently and kept me informed every step of the way. I trust them completely with my investments."</p>
                        <div class="testi-grid_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-card_profile">
                            <div class="quote-icon">
                                <img src="assets/img/icon/qoute.svg" alt="icon">
                            </div>

                            <div class="testi-card_profile-details">
                                <h3 class="testi-card_name">Ahmed Al-Maktoum</h3>
                                <span class="testi-card_desig">Property Expert</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testi-card style3">
                        <p class="testi-card_text">"Al Khaleej Real Estate Dubai made the process of buying our first home seamless and stress-free. Their team was incredibly patient, answered all our questions, and provided valuable insights into the market. We are now proud homeowners thanks to their excellent service!"</p>
                        <div class="testi-grid_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-card_profile">
                            <div class="quote-icon">
                                <img src="assets/img/icon/qoute.svg" alt="icon">
                            </div>

                            <div class="testi-card_profile-details">
                                <h3 class="testi-card_name">Emily J</h3>
                                <span class="testi-card_desig">Property Expert</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-card style3">
                        <p class="testi-card_text">"Working with Al Khaleej Real Estate Dubai was a game-changer for my real estate investments. Their market knowledge and strategic advice have significantly increased my returns. Their property management services are top-notch, ensuring my properties are well-maintained and tenants are happy. "</p>
                        <div class="testi-grid_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-card_profile">
                            <div class="quote-icon">
                                <img src="assets/img/icon/qoute.svg" alt="icon">
                            </div>

                            <div class="testi-card_profile-details">
                                <h3 class="testi-card_name"> Hassan Al-Rashid</h3>
                                <span class="testi-card_desig">Property Expert</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-card style3">
                        <p class="testi-card_text">"I can't thank Al Khaleej Real Estate Dubai enough for their exceptional service. They helped me find a beautiful villa that met all my requirements. The entire process was smooth, and their team went above and beyond to ensure I was satisfied. Truly a five-star experience! "</p>
                        <div class="testi-grid_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-card_profile">
                            <div class="quote-icon">
                                <img src="assets/img/icon/qoute.svg" alt="icon">
                            </div>

                            <div class="testi-card_profile-details">
                                <h3 class="testi-card_name">Lisa T</h3>
                                <span class="testi-card_desig">Property Expert</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="client-area-1 bg-gray reduceSize" style="padding: 70px 0px !important;">
    <div class="container th-container2">
        <div class="swiper th-slider has-shadow" id="clientSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper d-flex align-items-center">

                @foreach ($brandLogo as $data)
                <div class="swiper-slide">
                    <img src="{{ asset('/storage/'.$data->image) }}" style="width: 200px;" alt="Image">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="space overflow-hidden  reduceSize " id="contactSubmitForm">
    <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none reduceSize " data-bottom="9%" data-left="34%">
        <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
    </div>
    <div class="sec-bg-shape2-2 wave-anim shape-mockup d-xl-block d-none" data-top="19%" data-left="12%" data-bg-src="assets/img/shape/section_shape_2_2.jpg">
    </div>
    <div class="container th-container2" >
        <div class="row gx-60 align-items-center">
            <div class="col-lg-5 ">
                <div class="appointment-thumb text-xl-end mb-lg-0 mb-50">
                    <img src="{{asset('assets/dubai_elevation_new.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="title-area mb-35">
                    <h2 class="sec-title">Book Business Solutions</h2>
                </div>
                <form action="{{route('submitContactForm')}}" method="POST" class="appointment-form  me-xl-5 " >
                    @csrf
                    <div class="row">
                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                         @endif

                        <div class="form-group style-border col-md-6">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group style-border col-md-6">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group style-border col-md-12">
                            <input type="email" class="form-control" name="email"  placeholder="Your Email*" required>
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group style-border col-md-12">
                            <select class="form-select" name="category" required>
                                <option value="" disabled selected hidden>Select Service Type</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Residencial">Residencial</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                            <i class="fal fa-angle-down"></i>
                        </div>
                        <div class="col-12 form-group style-border">
                            <i class="far fa-comments"></i>
                            <textarea placeholder="Type Your Message" class="form-control" name="message" required></textarea>
                        </div>
                        {!! htmlFormSnippet() !!}
                        <div class="col-12 form-btn mt-4">
                            <button class="th-btn style-border" type="submit">Submit Message <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                        </div>

                    </div>
                    <p class="form-messages mb-0 mt-3"></p>

                </form>
            </div>

        </div>

    </div>
</div>

<div class="space  position-relative overflow-hidden reduceSize">
    <div class="contact-bg-shape1-1 jump shape-mockup" data-bottom="30%" data-left="0%">
        <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
    </div>
    <div class="container th-container2">
        <div class="row gx-35">
            <div class="col-lg-5">
                <div class="title-area">
                    <h2 class="sec-title">Get In Touch</h2>
                    <p>Realar help you easily create a real estate trading website. With the function Register, Login, Post real estate news.</p>
                </div>
                <div class="about-contact-grid">
                    <div class="about-contact-icon text-white">
                        <img src="assets/img/icon/location-dot.svg" alt="icon">
                    </div>
                    <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Location:</h6>
                        <p class="about-contact-details-text">Ajman - United Arab Emirates</p>
                        <!-- <p class="about-contact-details-text">Oud Metha, Dubai, U.A.E</p> -->
                    </div>
                </div>
                <div class="about-contact-grid">
                    <div class="about-contact-icon text-white">
                        <img src="assets/img/icon/phone.svg" alt="icon">
                    </div>
                    <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Phone:</h6>
                       <!-- <p class="about-contact-details-text"><a href="tel:01234567890">(04) 834 3914</a></p> -->
                       <p class="about-contact-details-text"><a href="tel:+971505032480">+971 50 50 32480</a></p>
                    </div>
                </div>
                <div class="about-contact-grid">
                    <div class="about-contact-icon text-white">
                        <img src="assets/img/icon/envelope.svg" alt="icon">
                    </div>
                    <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Email:</h6>
                        <p class="about-contact-details-text"><a href="mailto:infomailrealar@gmail.com">Khaleejestate@gmail.com</a></p>
                        <!-- <p class="about-contact-details-text"><a href="mailto:supportmail01@gmail.com">support@gfsrealestate.ae</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="location-map contact-sec-map reduceSize">
        <div class="contact-map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14436.174991268312!2d55.28755471708244!3d25.235451442979254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43ef9dc00637%3A0x2b18d3823c83d7de!2sGFS%20Builders%20%26%20Developers%20%7C%20Best%20Real%20Estate%20Company%20In%20Dubai!5e0!3m2!1sen!2s!4v1719576909711!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe> -->

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115329.71774055103!2d55.52594935!3d25.403013700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5764dd8fbe79%3A0xcda090de6445a819!2sAjman%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1723648796566!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="location-map-address">
            <div class="thumb">
                <img src="{{asset('assets/al-khaleej-logo.jpg')}}" width="250px" height="150px"  alt="img">
            </div>
            <div class="media-body">
                <h4 class="title">Address:</h4>
                <p class="text">Ajman - United Arab Emirates</p>
                <!-- <h4 class="title">Office # 115</h4> -->
            </div>
        </div>
    </div>
</div>

</div>


@endsection


@section('scripts')
<script>
    window.onload = function() {
     var video = document.getElementById('hero-video');
     video.load();
     video.play();
 };
 </script>
@endsection


