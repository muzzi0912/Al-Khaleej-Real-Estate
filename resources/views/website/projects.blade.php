@extends('website.layout')

@section('title', 'Projects')

@section("section-wrapper")



<section class="reduceSize ">

    <div class="container th-container2" style="margin-top: 50px">

         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="{{route('projects')}}">Properties</a></li>
            </ol>
        </nav>


        <div class="tab-content mt-5" id="nav-tabContent">
            <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                <div class="row gy-40">

                    @foreach ($projects as $data )
                    <div class="col-md-4 col-xl-4">
                        <div class="property-card2">
                            <div class="property-card-thumb img-shine">
                               <a href="{{ route('projectsdetails', ['slug' => $data->slug]) }}">
                                <img src="{{asset('storage/'.$data->thumbnail_image)}}" alt="{{$data->project_name}}">
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
        <div class="mt-60 text-center">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Showing {{ $projects->firstItem() }} to {{ $projects->lastItem() }} of {{ $projects->total() }}
                        ({{ $projects->lastPage() }} Pages)
                    </p>
                    <div class="th-pagination">
                        <ul>
                            {{-- Previous Page Link --}}
                            @if (!$projects->onFirstPage())
                                <li><a class="prev-page" href="{{ $projects->previousPageUrl() }}" rel="prev"><i class="far fa-arrow-left me-2"></i>Previous</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($projects->links()->elements[0] as $page => $url)
                                <li>
                                    @if ($page == $projects->currentPage())
                                        <a class="active" href="{{ $url }}">{{ $page }}</a>
                                    @else
                                        <a href="{{ $url }}">{{ $page }}</a>
                                    @endif
                                </li>
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($projects->hasMorePages())
                                <li><a class="next-page" href="{{ $projects->nextPageUrl() }}" rel="next">Next<i class="far fa-arrow-right ms-2"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


