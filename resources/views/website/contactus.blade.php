@extends('website.layout')

@section('title', 'Contact us')

@section("section-wrapper")

<div class="breadcumb-wrapper reduceSize" data-bg-src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Contact Us</h1>
                    <ul class="breadcumb-menu">
                        <li ><a href="{{route('home')}}" class="bd-color">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="space reduceSize">
    <div class="container th-container2">
        <div class="title-area text-center">
            <span class="sub-title">Get In Touch</span>
            <h2 class="sec-title text-theme">Our Contact Information</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid ">
                    <div class="about-contact-icon">
                        <i class="fal fa-location-dot"></i>
                    </div>
                    <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Our Address</h6>
                        <p class="about-contact-details-text">Ajman - United Arab Emirates</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid ">
                    <div class="about-contact-icon">
                        <i class="fal fa-phone"></i>
                    </div>
                    <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Phone Number</h6>
                        <!-- <p class="about-contact-details-text"><a href="tel:01234567890">(04) 834 3914</a></p> -->
                        <p class="about-contact-details-text"><a href="tel:+971505032480">+971 50 50 32480</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="about-contact-grid ">
                    <div class="about-contact-icon">
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="about-contact-details">
                        <h6 class="about-contact-details-title">Email Address</h6>
                        <p class="about-contact-details-text"><a href="mailto:mailinfo00@realar.com">Khaleejestate@gmail.com</a></p>
                        <!-- <p class="about-contact-details-text"><a href="mailto:support24@realar.com">support@gfsrealestate.ae</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space contact-area-3 z-index-common reduceSize" data-bg-src="https://gfsrealestate.ae/wp-content/uploads/2016/03/036.jpg" data-overlay="title" data-opacity="3">
    <div class="contact-bg-shape3-1 spin shape-mockup " data-bottom="5%" data-left="12%">
        <img src="{{asset('assets/img/shape/section_shape_2_1.jpg')}}" alt="img">
    </div>
    <div class="container th-container2" id="contactSubmitForm">
        <div class="row gx-35">
            <div class="col-lg-6">
                <div class="appointment-wrap2 bg-white me-xxl-5">
                    <h2 class="form-title text-theme">Contact Us</h2>
                    <form action="{{route('contactus')}}" method="POST" class="appointment-form">
                        <div class="row">
                            @csrf
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

                            <div class="form-group style-border style-radius col-6">
                                <input type="text" class="form-control" name="first_name" id="name" placeholder="First Name" required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group style-border style-radius col-6">
                                <input type="text" class="form-control" name="last_name" id="name" placeholder="Last Name" required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group style-border style-radius col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*" required>
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group style-border style-radius col-md-12">
                                <select name="category" id="subject" class="form-select" required>
                                    <option value="" disabled selected hidden>Select Service Type</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Residencial">Residencial</option>
                                    <option value="Deluxe">Deluxe</option>
                                </select>
                                <i class="fal fa-angle-down"></i>
                            </div>
                            <div class="col-12 form-group style-border style-radius">
                                <i class="far fa-comments"></i>
                                <textarea placeholder="Type Your Message" class="form-control" name="message" required></textarea>
                            </div>
                            {!! htmlFormSnippet() !!}
                            <div class="col-12 form-btn mt-4">
                                <button class="th-btn">Submit Message <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="location-map contact-sec-map z-index-common">
        <div class="contact-map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14436.174991268312!2d55.28755471708244!3d25.235451442979254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43ef9dc00637%3A0x2b18d3823c83d7de!2sGFS%20Builders%20%26%20Developers%20%7C%20Best%20Real%20Estate%20Company%20In%20Dubai!5e0!3m2!1sen!2s!4v1719576909711!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe> -->

                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115329.71774055103!2d55.52594935!3d25.403013700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5764dd8fbe79%3A0xcda090de6445a819!2sAjman%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1723648796566!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </div>
        <div class="location-map-address bg-theme">
            <div class="thumb">
                <img src="{{asset('assets/al-khaleej-logo.jpg')}}" width="250px" height="150px" alt="img">
            </div>
            <div class="media-body">
                <h4 class="title">Address:</h4>
                <p class="text">Ajman - United Arab Emirates</p>
                <!-- <h4 class="title">Office # 115</h4> -->
            </div>
        </div>
    </div>
</div>

@endsection


