@extends('website.layout')

@section('title', 'About us')

@section("section-wrapper")

<div class="breadcumb-wrapper reduceSize" data-bg-src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">About Us</h1>
                    <ul class="breadcumb-menu">
                        <li ><a href="{{route('home')}}" class="bd-color">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
About Area
==============================-->
<div class="overflow-hidden space reduceSize">

    <div class="sec-bg-shape2-1 jump shape-mockup d-xl-block d-none" data-bottom="0%" data-left="5%">
        <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
    </div>
    <div class="container th-container2">
        <div class="about-page-wrap">
            <div class="row gy-40 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-area mb-0">
                        <h2 class="sec-title text-theme mb-2">Al Khaleej Vission & Mission</h2>
                        <p class="mb-0 text-theme">At Al Khaleej Real Estate Dubai, our mission is to redefine luxury living by crafting extraordinary spaces that seamlessly integrate opulence, comfort, and cutting-edge modernity. We are dedicated to delivering exceptional real estate solutions that not only meet but exceed the diverse needs and aspirations of our clients. Our goal is to provide a superior property ownership experience characterized by meticulous attention to detail, unparalleled quality, and innovative design.</p>


                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="{{asset('assets/img/background.jpg')}}" alt="About">
                        </div>
                        <div class="about-tag">

                        <a href="https://www.youtube.com/embed/JGJKDFx450c" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="{{asset('assets/img/secound-background.jpeg')}}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-theme">Our vision is to establish Al Khaleej Real Estate Dubai as a global leader in the real estate industry, renowned for our excellence in craftsmanship and commitment to sustainable development. We aspire to set new standards in the sector by continually advancing our practices, embracing emerging technologies, and pushing the boundaries of design and construction. Our aim is to lead by example, inspiring innovation and excellence while fostering a lasting positive impact on the communities we serve. Through our unwavering dedication to quality and forward-thinking approach, we strive to shape the future of real estate and deliver unmatched value to our clients worldwide.</p>
                </div>
            </div>
        </div>
    </div>
</div>


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
                                        <img src="{{asset('assets/project_img/001.jpg')}}" alt="About">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img1">
                                        <img src="{{asset('assets/project_img/001.jpg')}}" alt="About">
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
                        <a href="https://www.youtube.com/embed/JGJKDFx450c" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
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



<div class="why-sec-1 overflow-hidden space bg-theme reduceSize">
    <div class="sec-bg-shape2-1 text-white spin shape-mockup d-xl-block d-none" data-bottom="15%" data-left="12%">
        <img src="assets/img/shape/section_shape_2_1.jpg" alt="img">
    </div>
    <div class="sec-bg-shape2-3 text-white jump shape-mockup d-xl-block d-none" data-bottom="0%" data-right="7%">
        <img src="assets/img/shape/section_shape_2_3.jpg" alt="img">
    </div>
    <div class="container">
        <div class="row justify-content-lg-between align-items-center">
            <div class="col-lg-6">
                <div class="title-area">
                    <h2 class="sec-title text-white">Why Choose Us?</h2>
                    <p class="text-light">With over 20 years of experience in the real estate sector, Al Khaleej Real Estate Dubai has established a reputation for excellence and innovation. Our portfolio is a testament to our commitment to quality, showcasing projects that embody luxury, comfort, and strategic location advantages.</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="{{route('contactus')}}" class="th-btn style-border th-btn-icon">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="swiper th-slider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="service-card style4">
                        <div class="service-card-icon">
                            <img src="{{asset('assets/img/icon/service-icon4-1.svg')}}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="">Property Valuation</a></h3>
                        <p class="box-text">Get accurate and up-to-date property valuations with our expert analysis, ensuring you make well-informed decisions.</p>
                        <div class="service-img img-shine">
                            <img src="{{asset('assets/project_img/005.jpeg')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-card style4">
                        <div class="service-card-icon">
                            <img src="{{asset('assets/img/icon/service-icon4-2.svg')}}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="property-details.html">Property Management</a></h3>
                        <p class="box-text">Enjoy hassle-free property management with our comprehensive services, covering maintenance, tenant relations, and financial oversight</p>
                        <div class="service-img img-shine">
                            <img src="{{asset('assets/project_img/006.jpg')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-card style4">
                        <div class="service-card-icon">
                            <img src="{{asset('assets/img/icon/service-icon4-1.svg')}}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="property-details.html">Invest Opportunities</a></h3>
                        <p class="box-text">Discover lucrative real estate investments through our in-depth market insights and strategic guidance, tailored to help you achieve your goals.</p>
                        <div class="service-img img-shine">
                            <img src="{{asset('assets/project_img/007.jpg')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Testimonial Area
==============================-->


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
            <div class="swiper-wrapper">

                @foreach ($brandLogo as $data)
                <div class="swiper-slide">
                    <img src="{{ asset('/storage/'.$data->image) }}" alt="Image">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection


