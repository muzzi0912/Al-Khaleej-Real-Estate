@extends('website.layout')

@section('title', 'Agents')

@section("section-wrapper")

<div class="breadcumb-wrapper reduceSize" data-bg-src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Agents</h1>
                    <ul class="breadcumb-menu">
                        <li ><a href="{{route('home')}}" class="bd-color">Home</a></li>
                        <li>Agents</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="space reduceSize">
    <div class="container th-container2 z-index-common">
        <div class="row gy-30">
            @foreach ($agents as $data)
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card style4">
                    <div class="img-wrap">
                        <div class="team-img">
                            <img src="{{asset('storage/'.$data->profile_image)}}" alt="Team">
                        </div>
                    </div>
                    <div class="team-card-content">
                        <div class="media-left">
                            <h3 class="box-title"><a href="">{{$data->name}}</a></h3>
                            <span class="team-desig">{{$data->descignation}}</span>
                        </div>
                        <a class="icon-btn" href="tel:{{$data->phone_number}}"><img src="assets/img/icon/phone.svg" alt="img"></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-60 text-center">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Showing {{ $agents->firstItem() }} to {{ $agents->lastItem() }} of {{ $agents->total() }}
                        ({{ $agents->lastPage() }} Pages)
                    </p>
                    <div class="th-pagination">
                        <ul>
                            {{-- Previous Page Link --}}
                            @if (!$agents->onFirstPage())
                                <li><a class="prev-page" href="{{ $agents->previousPageUrl() }}" rel="prev"><i class="far fa-arrow-left me-2"></i>Previous</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($agents->links()->elements[0] as $page => $url)
                                <li>
                                    @if ($page == $agents->currentPage())
                                        <a class="active" href="{{ $url }}">{{ $page }}</a>
                                    @else
                                        <a href="{{ $url }}">{{ $page }}</a>
                                    @endif
                                </li>
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($agents->hasMorePages())
                                <li><a class="next-page" href="{{ $agents->nextPageUrl() }}" rel="next">Next<i class="far fa-arrow-right ms-2"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


