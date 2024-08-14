@extends('website.layout')

@section('title', 'Inquiry')

@section("section-wrapper")

<div class="breadcumb-wrapper reduceSize" data-bg-src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Inquiry</h1>
                    <ul class="breadcumb-menu">
                        <li ><a href="{{route('home')}}" class="bd-color">Home</a></li>
                        <li>Inquiry</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="space contact-area-3 z-index-common bg-gray reduceSize">

    <div class="container th-container2" id="contactSubmitForm">
        <div class="d-flex justify-content-center">
            <div class="col-lg-8 ">
                <div class="appointment-wrap2 bg-white me-xxl-5">
                    <h2 class="form-title text-theme">Inquiry Form</h2>
                    <form action="{{route('submitinquiry')}}" method="POST" class="appointment-form">
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
                            <div class="form-group style-border style-radius col-md-12">
                                <select  id="subject" class="form-select" required name="inquiry_type">
                                    <option value="" disabled selected hidden>I'm looking for</option>
                                    <option value="Purchase">Purchase</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Sell">Sell</option>
                                    <option value="Evaluation">Evaluation</option>
                                    <option value="Mortgage">Mortgage</option>
                                </select>
                                <i class="fal fa-angle-down"></i>
                            </div>
                            <div class="form-group style-border style-radius col-md-12">
                                <select  id="subject" class="form-select" name="information" required>
                                    <option value="" disabled selected hidden>I'm a</option>
                                    <option value="I am a real estate agent">I am a real estate agent</option>
                                    <option value="I am a property owner">I am a property owner</option>
                                    <option value="I am a consumer">I am a consumer</option>
                                    <option value="Other">Other</option>
                                </select>
                                <i class="fal fa-angle-down"></i>
                            </div>

                            <div class="form-group style-border style-radius col-6">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group style-border style-radius col-6">
                                <input type="text" class="form-control" name="last_name"  placeholder="Last Name" required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group style-border style-radius col-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email*" required>
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group style-border style-radius col-6">
                                <input type="number" class="form-control" name="phone_number" placeholder="Mobile*" required>
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group style-border style-radius col-md-12">
                                <select id="subject" class="form-select" name="property_type">
                                    <option value="" disabled selected hidden>Property Type</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Office">- Office</option>
                                    <option value="Shop">- Shop</option>
                                    <option value="Residential">Residential</option>
                                    <option value="Apartment">- Apartment</option>
                                    <option value="Cando">- Cando</option>
                                    <option value="Multi Family Home">- Multi Family Home</option>
                                    <option value="Single Family Home">- Single Family Home</option>
                                    <option value="Studio">- Studio</option>
                                    <option value="Villa">- Villa</option>
                                </select>
                                <i class="fal fa-angle-down"></i>
                            </div>
                            <div class="col-12 form-group style-border style-radius">
                                <i class="far fa-comments"></i>
                                <textarea placeholder="Type Your Message" class="form-control" name="message"></textarea>
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

</div>

@endsection


