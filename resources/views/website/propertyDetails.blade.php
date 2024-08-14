@extends('website.layout')

@section('title', 'Properties')

@section("section-wrapper")



<section class=" reduceSize" style="margin-top: 50px;">
    <div class="container th-container2">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Appartment</li>
              <li class="breadcrumb-item active" aria-current="page">New apartment nice view</li>
            </ol>
        </nav>

          <h3 class="page-title">New Apartment Nice View</h3>

          <div class="property-page-single">
          <div class="page-content">
            <div class="property-meta mb-30">
                <span class="property-tag" href="blog.html">For Rent</span>
                <a href="blog.html"><img src="{{asset('assets/img/icon/calendar.svg')}}" alt="img">05 Jun, 2024</a>
            </div>
          </div>
        </div>

        <div class="row gx-30 ">
            <div class="col-lg-8">
                <div class="slider-area property-slider1">
                    <div class="swiper th-slider mb-4" id="propertySlider" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".property-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('assets/1296x555.jpeg')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('assets/1296x555.jpeg')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('assets/1296x555.jpeg')}}" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('assets/1296x555.jpeg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper th-slider property-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}},"autoplayDisableOnInteraction":"true"}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('assets/1296x555.jpeg')}}" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('assets/1296x555.jpeg')}}" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('assets/1296x555.jpeg')}}" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('assets/1296x555.jpeg')}}" alt="Image">
                                </div>
                            </div>

                        </div>
                    </div>

                    <button data-slider-prev="#propertySlider" class="slider-arrow style3 slider-prev"><img src="{{asset('assets/img/icon/arrow-left.svg')}}" alt="icon"></button>
                    <button data-slider-next="#propertySlider" class="slider-arrow style3 slider-next"><img src="{{asset('assets/img/icon/arrow-right.svg')}}" alt="icon"></button>
                </div>

                <div class="property-page-single">
                    <div class="page-content">
                        <div class="property-meta mb-30">
                            <a class="property-tag" href="blog.html">Featured</a>
                            <a href="blog.html"><img src="{{asset('assets/img/icon/calendar.svg')}}" alt="img">05 Jun, 2024</a>
                        </div>
                        <h2 class="page-title">About This Property</h2>
                        <p class="mb-30">voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                        <p class="mb-30"> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                        <h2 class="page-title mb-20">Property Overview</h2>
                        <ul class="property-grid-list">
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-1.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">ID NO.</h4>
                                    <p class="property-grid-list-text">#1234</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-2.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Type</h4>
                                    <p class="property-grid-list-text">Residencial</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-3.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Room</h4>
                                    <p class="property-grid-list-text">6</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-4.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Bedroom</h4>
                                    <p class="property-grid-list-text">4</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-5.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Bath</h4>
                                    <p class="property-grid-list-text">2</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-6.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Purpose</h4>
                                    <p class="property-grid-list-text">For Rent</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-7.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Sqft</h4>
                                    <p class="property-grid-list-text">4000</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-8.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Parking</h4>
                                    <p class="property-grid-list-text">Yes</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-9.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Elevator</h4>
                                    <p class="property-grid-list-text">Yes</p>
                                </div>
                            </li>
                            <li>
                                <div class="property-grid-list-icon">
                                    <img src="{{asset('assets/img/icon/property-single-icon1-10.svg')}}" alt="img">
                                </div>
                                <div class="property-grid-list-details">
                                    <h4 class="property-grid-list-title">Wifi</h4>
                                    <p class="property-grid-list-text">Yes</p>
                                </div>
                            </li>
                        </ul>
                        <h3 class="page-title mt-50 mb-30">From Our Gallery</h3>
                        <div class="row gy-4">
                            <div class="col-xl-5">
                                <div class="property-gallery-card">
                                    <div class="property-gallery-card-img">
                                        <img class="w-100" src="{{asset('assets/img/property/property_inner_6.jpg')}}" alt="img">
                                    </div>
                                    <a class="icon-btn popup-image" href="{{asset('assets/img/property/property_inner_6.jpg')}}"><i class="fal fa-magnifying-glass-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="property-gallery-card">
                                    <div class="property-gallery-card-img">
                                        <img class="w-100" src="{{asset('assets/img/property/property_inner_7.jpg')}}" alt="img">
                                    </div>
                                    <a class="icon-btn popup-image" href="{{asset('assets/img/property/property_inner_7.jpg')}}"><i class="fal fa-magnifying-glass-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="property-gallery-card">
                                    <div class="property-gallery-card-img">
                                        <img class="w-100" src="{{asset('assets/img/property/property_inner_8.jpg')}}" alt="img">
                                    </div>
                                    <a class="icon-btn popup-image" href="{{asset('assets/img/property/property_inner_8.jpg')}}"><i class="fal fa-magnifying-glass-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="property-gallery-card">
                                    <div class="property-gallery-card-img">
                                        <img class="w-100" src="{{asset('assets/img/property/property_inner_9.jpg')}}" alt="img">
                                    </div>
                                    <a class="icon-btn popup-image" href="{{asset('assets/img/property/property_inner_9.jpg')}}"><i class="fal fa-magnifying-glass-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <h3 class="page-title mt-50 mb-25">Features & amenities</h3>
                        <div class="row gy-3">
                            <div class="col-xxl-3 col-sm-6">
                                <div class="checklist">
                                    <ul>
                                        <li><i class="far fa-square-check"></i>Airconditioning</li>
                                        <li><i class="far fa-square-check"></i>Balcony</li>
                                        <li><i class="far fa-square-check"></i>Garage</li>
                                        <li><i class="far fa-square-check"></i>Landscaping</li>
                                        <li><i class="far fa-square-check"></i>Outdoor Kitchen</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="checklist">
                                    <ul>
                                        <li><i class="far fa-square-check"></i>Barbeque</li>
                                        <li><i class="far fa-square-check"></i>Recreation</li>
                                        <li><i class="far fa-square-check"></i>Microwave</li>
                                        <li><i class="far fa-square-check"></i>Basketball</li>
                                        <li><i class="far fa-square-check"></i>Fireplace</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="checklist">
                                    <ul>
                                        <li><i class="far fa-square-check"></i>24x7 Seccurity</li>
                                        <li><i class="far fa-square-check"></i>Indoor Game</li>
                                        <li><i class="far fa-square-check"></i>Pool</li>
                                        <li><i class="far fa-square-check"></i>Tanis Courts</li>
                                        <li><i class="far fa-square-check"></i>Internet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-6">
                                <div class="checklist">
                                    <ul>
                                        <li><i class="far fa-square-check"></i>Jaguzzi</li>
                                        <li><i class="far fa-square-check"></i>Modern Kitchen</li>
                                        <li><i class="far fa-square-check"></i>Refrigerator</li>
                                        <li><i class="far fa-square-check"></i>Window Coverings</li>
                                        <li><i class="far fa-square-check"></i>Washer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3 class="page-title mt-45 mb-30">Location</h3>
                        <div class="location-map">
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14436.174991268312!2d55.28755471708244!3d25.235451442979254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43ef9dc00637%3A0x2b18d3823c83d7de!2sGFS%20Builders%20%26%20Developers%20%7C%20Best%20Real%20Estate%20Company%20In%20Dubai!5e0!3m2!1sen!2s!4v1719576909711!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>


                        <h3 class="page-title mt-50 mb-30">Property Video</h3>
                        <div class="video-box2 mb-30">
                            <img src="{{asset('assets/img/image-001.jpg')}}" alt="img">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <aside class="sidebar-area ">

                    <div class="widget widget-property-contact custom-widget">
                        <h3 class="title">Price</h3>
                        <p class="widget_text">AED 4,500</p>
                        <div class="boder-line"></div>
                        <h3 class="title">Agent Name</h3>
                        <div class="agent-name ">
                            <div class="left">
                            <img src="https://gfswebdevelopmentteam.com/storage/agent_profile_images/4AkngV4zspwUcub45TejC4dbyGFpoyMhGRS1brR5.jpg" alt="">
                            <p class="widget_text"><b>Wissam Almuslim</b></p>
                            </div>
                            <div class="right">
                                <a class="" href="tel:"><img src="{{asset('assets/img/icon/phone.svg')}}" alt="img"></a>
                            </div>
                        </div>
                        <div class="boder-line"></div>
                    </div>

                    <div class="widget widget-property-contact">
                        <p class="widget_text">I am interested in this property</p>
                        <form action="#" class="widget-property-contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control style-border" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control style-border" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control style-border" placeholder="Phone Number">
                            </div>
                            <button class="th-btn th-btn-icon mt-15">Submit</button>
                        </form>
                    </div>

                    <div class="widget widget_banner widget-properties ">
                        <div class="widget-banner text-center widget-properties">
                            <h3 class="title">Need Help? We Are Here To Help You</h3>
                            <div class="logo"><img src="{{asset('assets/al-khaleej-logo.jpg')}}" width="250px" height="150px" alt="img" width="120px"></div>
                            <h4 class="subtitle">You Get Online support</h4>
                            <h5 class="link"><a href="tel:+971505032480">+971 50 50 32480</a></h5>
                            <a href="{{route('contactus')}}" class="th-btn style-border th-btn-icon">Contact Us</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
         <!-- <p class="about-contact-details-text"><a href="tel:01234567890">(04) 834 3914</a></p> -->
         <p class="about-contact-details-text"><a href="tel:+971505032480">+971 50 50 32480</a></p>
    </div>
</section>

@endsection


