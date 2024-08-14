@extends('website.layout')

@section('title', $project->project_name)

@section("section-wrapper")

<div class="image-wrapper-custom">
    <img src="{{asset('storage/'.$project->hero_image)}}" alt="">
</div>


<section class="reduceSize customnavwrapper">
    <div class="container th-container2 customnav">
        <div class="nav-section-project ">
            <a class="project-section-item" href="#description">
                <i class="fa-regular fa-align-left"></i>
                <p>Description</p>
            </a>
        </div>
        <div class="nav-section-project">
            <a class="project-section-item" href="#image-gallery">
                <i class="fa-regular fa-image"></i>
                <p>Image Gallery</p>
            </a>
        </div>
        <div class="nav-section-project">
            <a class="project-section-item" href="#location">
                <i class="fa-regular fa-location-dot"></i>
                <p>Location</p>
            </a>
        </div>
        <div class="nav-section-project">
            <a class="project-section-item" href="#payment-plan">
                <i class="fa-solid fa-money-bill"></i>
                <p>Payment Plan</p>
            </a>
        </div>
        <div class="nav-section-project">
            <a class="project-section-item" href="{{asset('storage/'.$project->project_boucher_image)}}" target="blank">
                <i class="fa-regular fa-file-pdf"></i>
                <p>Brochure</p>
            </a>
        </div>
    </div>
</section>



<section class=" reduceSize" style="margin-top: 50px;">
    <div class="container th-container2">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Properties</li>
              <li class="breadcrumb-item active" aria-current="page">{{$project->project_name}}</li>
            </ol>
        </nav>

          <h3 class="page-title">{{$project->project_name}}</h3>

          <div class="property-page-single">
          <div class="page-content">
            <div class="property-meta mb-30">
                <a href="#"><img src="{{asset('assets/img/icon/calendar.svg')}}" alt="img">{{$project->created_at->format('d M, Y')}}</a>
            </div>
          </div>
        </div>

        <div class="row gx-30 " id="image-gallery">
            <div class="col-lg-8">
                <div class="slider-area property-slider1">
                    <div class="swiper th-slider mb-4" id="propertySlider" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".property-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                        <div class="swiper-wrapper">
                            @foreach ($project->project_images as $data )
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('storage/'.$data)}}" alt="{{$project->project_name}}">
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="swiper th-slider property-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}},"autoplayDisableOnInteraction":"true"}'>
                        <div class="swiper-wrapper">
                            @foreach ($project->project_images as $data )
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{asset('storage/'.$data)}}" alt="{{$project->project_name}}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <button data-slider-prev="#propertySlider" class="slider-arrow style3 slider-prev"><img src="{{asset('assets/img/icon/arrow-left.svg')}}" alt="icon"></button>
                    <button data-slider-next="#propertySlider" class="slider-arrow style3 slider-next"><img src="{{asset('assets/img/icon/arrow-right.svg')}}" alt="icon"></button>
                </div>

                <div class="property-page-single">
                    <div class="page-content">
                        <div class="property-meta mb-30" id="description">
                            <a class="property-tag" href="blog.html">About this Project</a>
                        </div>

                        <div>
                            {!! $project->long_description !!}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <aside class="sidebar-area ">
                    <div class="widget widget-property-contact custom-widget">
                        <div class="image img-shine">
                            <img src="{{asset('storage/'.$project->developer_image)}}" alt="img">
                        </div>
                        <h3 class="title">Price</h3>
                        <p class="widget_text">{{$project->price}}</p>
                        <div class="boder-line"></div>
                        <h3 class="title">Developer</h3>
                        <p class="widget_text">{{$project->developer_name}}</p>
                        <div class="boder-line"></div>
                        <h3 class="title">Handover Date</h3>
                        <p class="widget_text">{{$project->hand_over_date}}</p>
                        <div class="boder-line"></div>
                        <h3 class="title">Agent Name</h3>
                        <div class="agent-name ">
                            <div class="left">
                            <img src="{{asset('storage/'.$project->agent->profile_image)}}" alt="{{$project->agent->name}}">
                            <p class="widget_text"><b>{{$project->agent->name}}</b></p>
                            </div>
                            <div class="right">
                                <a class="" href="tel:{{$project->agent->phone_number}}"><img src="{{asset('assets/img/icon/phone.svg')}}" alt="img"></a>
                            </div>
                        </div>
                        <div class="boder-line"></div>
                    </div>
                    <div class="widget widget-property-contact" id="contactSubmitForm">
                        <p class="widget_text">I am interested in this project</p>
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

                        <form action="{{route('submitlead')}}" method="POST" class="widget-property-contact-form">
                            @csrf
                            <input type="text" hidden name="type" value="Project">
                            <div class="form-group">
                                <input type="text" class="form-control style-border" placeholder="Name" required name="name" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control style-border" placeholder="Email Address" required name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control style-border" placeholder="Phone Number" required name="phone" value="{{old('phone')}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control style-border" placeholder="Type Your Message" required name="message" value="{{old('message')}}">
                            </div>
                            <input type="text" hidden name="project_name" value="{{$project->project_name}}">
                            <input type="text" hidden name="projects_lug" value="{{$project->slug}}">
                            {!! htmlFormSnippet() !!}
                            <button class="th-btn th-btn-icon mt-15">Submit</button>
                        </form>
                    </div>

                </aside>
            </div>
        </div>

        <div class="property-page-single">
            <div class="page-content">
                <div class="payment-plan-wrap" id="payment-plan">
                    <div class="payment-plan">
                        <div class="payment-left">
                            <img src="{{asset('storage/'.$project->hero_image)}}" alt="About">
                        </div>
                        <div class="payment-right">
                            <h3 class="page-title mt-45 mb-30">Payment Plan</h3>
                            <div class="payment-plan-wrapper">
                                <div class="payment-plan-item">
                                    <div class="left">
                                        <p>During Construction</p>
                                    </div>
                                    <div class="rigth">
                                        <p><b>{{$project->during_construction}}</b></p>
                                    </div>
                                </div>
                                <div class="payment-plan-item">
                                    <div class="left">
                                        <p>On Construction Completion</p>
                                    </div>
                                    <div class="rigth">
                                        <p><b>{{$project->during_hand_over}}</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="page-title mt-45 mb-30" id="location">Location</h3>
                <div class="location-map">
                    <div class="contact-map custom-map">
                        <iframe src="{{$project->project_location_url}}" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>


                <h3 class="page-title mt-50 mb-30">Property Video</h3>
                <div class="video-box2 mb-30 custom-video">
                    @php
                    $randomIndex = array_rand($project->project_images);
                    $randomImage = $project->project_images[$randomIndex];
                    @endphp
                    <img src="{{asset('storage/'.$randomImage)}}" alt="{{$project->project_name}}">
                    <a href="{{$project->project_video}}" class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                </div>

                <h3 class="page-title mt-50 mb-30">Similar Projects</h3>
                <div class="tab-content mt-5" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                        <div class="row gy-40">

                            @foreach ($randomProjects as $data )
                            <div class="col-md-4 col-xl-4">
                                <div class="property-card2">
                                    <div class="property-card-thumb img-shine">
                                       <a href="{{ route('projectsdetails', ['slug' => $data->slug]) }}">
                                        <img src="{{asset('storage/'.$data->thumbnail_image)}}" alt="img">
                                       </a>
                                    </div>
                                    <div class="property-card-details">
                                        <div class="media-left">
                                            <h4 class="property-card-title"><a href="{{ route('projectsdetails', ['slug' => $data->slug]) }}">{{$data->project_name}}</a></h4>
                                            <h5 class="property-card-price">{{$data->price}}</h5>
                                            <p class="property-card-location">{{$data->project_address}}</p>
                                        </div>
                                        <div class="image-right img-shine">
                                            <img src="{{asset('storage/'.$data->developer_image)}}" alt="img">
                                        </div>

                                    </div>
                                    <div class="btn-wrap mt-3">
                                        <a href="{{ route('projectsdetails', ['slug' => $data->slug]) }}" class="th-btn style-border2 th-btn-icon " style="width: 100%">Details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


@endsection


