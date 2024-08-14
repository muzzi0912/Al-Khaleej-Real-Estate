@extends('website.layout')


@section('title', '404 Not Found')

@section("section-wrapper")

<section class="error-area-1 position-relative space-top reduceSize">
    <div class="container th-container2">
        <div class="error-img">
            <img src="{{asset('assets/040.jpg')}}" alt="404 image">
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="error-content">
                    <h2 class="error-title">404</h2>
                    <h3 class="error-subtitle">This page seems to have slipped through a time portal</h3>
                    <p class="error-text">We appologize for any distruction to the space-time continuum. Feel free to journey back to our homepage</p>
                    <a href="{{route('home')}}" class="th-btn style-border2 th-btn-icon">Go Back Home</a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection


