@extends('website.layout')

@section('title', 'Blogs')

@section("section-wrapper")

<div class="breadcumb-wrapper reduceSize" data-bg-src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Blogs</h1>
                    <ul class="breadcumb-menu">
                        <li ><a href="{{route('home')}}" class="bd-color">Home</a></li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="th-blog-wrapper space-top reduceSize">
    <div class="container th-container2">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($blogs as $data)
                    <div class="th-blog blog-single has-post-thumbnail col-md-4">
                        <div class="blog-img">
                            <a href="{{ route('blogsfull', ['slug' => $data->slug]) }}"><img src="{{asset('/storage/'.$data->hero_image)}}" alt="{{$data->hero_title}}"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="author"><i class="far fa-user"></i>By {{$data->author}}</span>
                                <span ><i class="far fa-clock"></i>{{ $data->created_at->format('d/M/Y') }}</span>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blogsfull', ['slug' => $data->slug]) }}">{{ Str::limit($data->title, 60, '...') }}</a></h2>
                            <p class="blog-text">{{ Str::limit($data->small_description, 135, '...') }}</p>
                            <a href="{{ route('blogsfull', ['slug' => $data->slug]) }}" class="th-btn style-border2 th-btn-icon">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Showing {{ $blogs->firstItem() }} to {{ $blogs->lastItem() }} of {{ $blogs->total() }}
                            ({{ $blogs->lastPage() }} Pages)
                        </p>
                        <div class="th-pagination">
                            <ul>
                                {{-- Previous Page Link --}}
                                @if (!$blogs->onFirstPage())
                                    <li><a class="prev-page" href="{{ $blogs->previousPageUrl() }}" rel="prev"><i class="far fa-arrow-left me-2"></i>Previous</a></li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($blogs->links()->elements[0] as $page => $url)
                                    <li>
                                        @if ($page == $blogs->currentPage())
                                            <a class="active" href="{{ $url }}">{{ $page }}</a>
                                        @else
                                            <a href="{{ $url }}">{{ $page }}</a>
                                        @endif
                                    </li>
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($blogs->hasMorePages())
                                    <li><a class="next-page" href="{{ $blogs->nextPageUrl() }}" rel="next">Next<i class="far fa-arrow-right ms-2"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
</section>
@endsection


