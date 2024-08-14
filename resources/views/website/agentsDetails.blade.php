@extends('website.layout')

@section('title', 'Agent Details')

@section("section-wrapper")

<div class="breadcumb-wrapper " data-bg-src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Agent Details</h1>
                    <ul class="breadcumb-menu">
                        <li ><a href="{{route('home')}}" class="bd-color">Home</a></li>
                        <li>Agent Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>





<section class="space">

    <div class="container th-container2">
        <div class="row gx-40 gy-40">
            <div class="col-xl-4 col-lg-5 col-md-8">
                <div class="th-team team-card style4">
                    <div class="img-wrap">
                        <div class="team-img">
                            <img src="{{asset('assets/img/team/team-01.jpg')}}" alt="Team">
                        </div>
                        <div class="th-social-wrap">
                            <div class="th-social">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://youtube.com/"><i class="fab fa-youtube"></i></a>
                                <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                            <a class="icon-btn" href="team-details.html"><img src="assets/img/icon/arrow-right.svg" alt="img"></a>
                        </div>
                    </div>
                    <div class="team-card-content">
                        <div class="media-left">
                            <h3 class="box-title"><a href="team-details.html">Muhammad Areeb Ali</a></h3>
                            <span class="team-desig">Property Agent</span>
                        </div>
                        <a class="icon-btn" href="tel:09876543210"><img src="{{asset('assets/img/icon/phone.svg')}}" alt="img"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="about-card">
                    <h2 class="about-card_title text-theme mb-45">Muhammad Areeb Ali</h2>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <ul class="team-about-list">
                                <li><strong>Designation: </strong>Property Agent</li>
                                <li><strong>Email Address: </strong>areeb@xyz.com</li>
                                <li><strong>Phone: </strong>0333 3322233 </li>
                                <li><strong>Rating: </strong>4.2
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="team-about-list">
                                <li><strong>Total Listings </strong>200+ Property</li>
                                <li><strong>Since From</strong>2029</li>
                                <li><strong>Whatsapp # </strong>03312255441</li>
                            </ul>
                        </div>
                    </div>

                    <div class="property-page-single" style="margin-top: 40px;">
                        <div class="page-content">
                          <div class="property-meta mb-30">
                              <span class="property-tag" href="blog.html">Send Email</span>
                          </div>
                          <div class="property-meta mb-30">
                              <span class="property-tag" href="blog.html">Call Now</span>
                          </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="container th-container2 space-top">
        <div class="row justify-content-between align-items-center">
            <div class="col-xxl-5 col-lg-8">
                <div class="title-area">

                    <h2 class="sec-title">Top Listings By Agent</h2>
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
                                        <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/008.jpg" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="{{asset('assets/img/icon/property-icon1-1.svg')}}" alt="img">Bed 4</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-2.svg')}}" alt="img">Bath 2</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-3.svg')}}" alt="img">1500 sqft</span>
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

                            <div class="swiper-slide">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                        <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/012.jpg" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="{{asset('assets/img/icon/property-icon1-1.svg')}}" alt="img">Bed 4</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-2.svg')}}" alt="img">Bath 2</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-3.svg')}}" alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-card-details">
                                        <div class="media-left">
                                            <h4 class="property-card-title"><a href="property-details.html">Family Houses</a></h4>
                                            <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                            <p class="property-card-location">California</p>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                        <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/030.jpg" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="{{asset('assets/img/icon/property-icon1-1.svg')}}" alt="img">Bed 4</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-2.svg')}}" alt="img">Bath 2</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-3.svg')}}" alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-card-details">
                                        <div class="media-left">
                                            <h4 class="property-card-title"><a href="property-details.html">Apartments House</a></h4>
                                            <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                            <p class="property-card-location">California</p>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                        <img src="https://gfsrealestate.ae/wp-content/uploads/2016/02/033.jpg" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="{{asset('assets/img/icon/property-icon1-1.svg')}}" alt="img">Bed 4</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-2.svg')}}" alt="img">Bath 2</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-3.svg')}}" alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-card-details">
                                        <div class="media-left">
                                            <h4 class="property-card-title"><a href="property-details.html">Modern House</a></h4>
                                            <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                            <p class="property-card-location">California</p>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                        <img src="https://images.allsoppandallsopp.com/public/mid/a0O4V00000NajoVUAR_m_IMG_6256%20copy.jpg" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="{{asset('assets/img/icon/property-icon1-1.svg')}}" alt="img">Bed 4</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-2.svg')}}" alt="img">Bath 2</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-3.svg')}}" alt="img">1500 sqft</span>
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

                            <div class="swiper-slide">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                        <img src="https://images.allsoppandallsopp.com/public/mid/a0O4V00000NajoVUAR_m_IMG_6281%20copy.jpg" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="{{asset('assets/img/icon/property-icon1-1.svg')}}" alt="img">Bed 4</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-2.svg')}}" alt="img">Bath 2</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-3.svg')}}" alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-card-details">
                                        <div class="media-left">
                                            <h4 class="property-card-title"><a href="property-details.html">Family Houses</a></h4>
                                            <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                            <p class="property-card-location">California</p>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="property-details.html" class="th-btn style-border2 th-btn-icon">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                        <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/008.jpg" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="{{asset('assets/img/icon/property-icon1-1.svg')}}" alt="img">Bed 4</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-2.svg')}}" alt="img">Bath 2</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-3.svg')}}" alt="img">1500 sqft</span>
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

                            <div class="swiper-slide">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                        <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/012.jpg" alt="img">
                                    </div>
                                    <div class="property-card-meta">
                                        <span><img src="{{asset('assets/img/icon/property-icon1-1.svg')}}" alt="img">Bed 4</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-2.svg')}}" alt="img">Bath 2</span>
                                        <span><img src="{{asset('assets/img/icon/property-icon1-3.svg')}}" alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-card-details">
                                        <div class="media-left">
                                            <h4 class="property-card-title"><a href="property-details.html">Family Houses</a></h4>
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

</section>


@endsection


