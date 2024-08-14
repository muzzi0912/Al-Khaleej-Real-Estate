@extends('website.layout')

@section('title', 'Properties')

@section("section-wrapper")




<section class="reduceSize">

    <div class="container th-container2" style="margin-top: 30px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              @if ($categoryActive)
              <li class="breadcrumb-item active" aria-current="page">{{ $categoryActive->name }}</li>
              @endif
              @if ($subCategory)
              <li class="breadcrumb-item active" aria-current="page">{{ $subCategory->name }}</li>
              @endif

            </ol>
        </nav>

        <ul class="nav nav-tabs property-tab " style="margin-top: 20px" role="tablist">
            @foreach ($category as $data)

            <li class="nav-item" role="presentation">
                <a href="{{ route('propertiestype', ['type' => Str::slug($data->name)]) }}" class="nav-link {{ $type == Str::slug($data->name) ? 'active' : '' }}" >{{$data->name}}</a>
            </li>

            @endforeach

            {{-- <li class="nav-item" role="presentation">
            <a href="#"data-bs-toggle="modal" data-bs-target="#advancefilters" class="th-btn style-border2 th-btn-icon">Advance Filters</a>
            </li> --}}
        </ul>
        <div class="tab-content" style="margin-top:20px;">
            <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
                <form class="property-search-form">
                    <label>Property Search</label>
                    <div class="form-group">
                        <i class="far fa-search"></i>
                        <input class="form-control" type="text" placeholder="Enter Keywords.....">
                    </div>
                    <select class="form-select">
                        <option value="category" selected="selected">Category</option>
                        <option value="luxury">Luxury</option>
                        <option value="commercial">Commercial</option>
                    </select>
                    <select class="form-select">
                        <option value="offer_type" selected="selected">Offer Type</option>
                        <option value="popularity">Popularity</option>
                        <option value="rating">Rating</option>
                        <option value="date">Latest</option>
                    </select>
                    <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>



                </form>
            </div>
            <div class="tab-pane fade" id="buy-tab-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                <form class="property-search-form">
                    <label>Property Search</label>
                    <div class="form-group">
                        <i class="far fa-search"></i>
                        <input class="form-control" type="text" placeholder="Lisiting ID or Location">
                    </div>
                    <select class="form-select">
                        <option value="category" selected="selected">Category</option>
                        <option value="luxury">Luxury</option>
                        <option value="commercial">Commercial</option>
                    </select>
                    <select class="form-select">
                        <option value="offer_type" selected="selected">Offer Type</option>
                        <option value="popularity">Popularity</option>
                        <option value="rating">Rating</option>
                        <option value="date">Latest</option>
                    </select>
                    <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                </form>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                <div class="row gy-40">

                    <div class="col-md-4 col-xl-3">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                               <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">
                                <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/030.jpg" alt="img">
                               </a>
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">Serenity Villa</a></h4>
                                    <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                    <p class="property-card-location">2464 Royal, New Jersey</p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                                <img src="https://images.allsoppandallsopp.com/public/mid/a0O4V00000NajoVUAR_m_IMG_6256%20copy.jpg" alt="img">
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">Serenity Villa</a></h4>
                                    <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                    <p class="property-card-location">2464 Royal, New Jersey</p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                                <img src="https://images.allsoppandallsopp.com/public/mid/a0O4V00000NajoVUAR_m_IMG_6281%20copy.jpg" alt="img">
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">Serenity Villa</a></h4>
                                    <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                    <p class="property-card-location">2464 Royal, New Jersey</p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                                <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/040.jpg" alt="img">
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">Serenity Villa</a></h4>
                                    <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                    <p class="property-card-location">2464 Royal, New Jersey</p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                                <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/008.jpg" alt="img">
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">Serenity Villa</a></h4>
                                    <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                    <p class="property-card-location">2464 Royal, New Jersey</p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                                <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/030.jpg" alt="img">
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">Serenity Villa</a></h4>
                                    <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                    <p class="property-card-location">2464 Royal, New Jersey</p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                                <img src="https://gfsrealestate.ae/wp-content/uploads/2016/03/040.jpg" alt="img">
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">Serenity Villa</a></h4>
                                    <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                    <p class="property-card-location">2464 Royal, New Jersey</p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                                <img src="https://images.allsoppandallsopp.com/public/mid/a0O4V00000NajoVUAR_m_IMG_6256%20copy.jpg" alt="img">
                            </div>
                            <div class="property-card-details">
                                <div class="media-left">
                                    <h4 class="property-card-title"><a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}">Serenity Villa</a></h4>
                                    <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                    <p class="property-card-location">2464 Royal, New Jersey</p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{ route('propertiesDetails', ['slug' => 'modern-office-space']) }}" class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
        <div class="mt-60 text-center">
            <div class="th-pagination ">
                <ul>
                    <!-- <li><a class="prev-page" href="blog.html"><i class="far fa-arrow-left me-2"></i>Previous</a></li> -->
                    <li><a class="active" href="blog.html">1</a></li>
                    <li><a href="blog.html">2</a></li>
                    <li><a href="blog.html">3</a></li>
                    <li><a href="blog.html">4</a></li>
                    <li><a href="blog.html">5</a></li>
                    <li><a class="next-page" href="blog.html">Next<i class="far fa-arrow-right ms-2"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection


