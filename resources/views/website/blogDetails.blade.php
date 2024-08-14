@extends('website.layout')

@section('title', $blog->title)

@section("section-wrapper")

<div class="breadcumb-wrapper reduceSize" data-bg-src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">{{$blog->title}}</h1>
                    <ul class="breadcumb-menu">
                        <li ><a href="{{route('home')}}" class="bd-color">Home</a></li>
                        <li ><a href="{{route('blogs')}}" class="bd-color">Blogs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="th-blog-wrapper blog-details overflow-hidden space-top space-extra-bottom reduceSize">
    <div class="container">
        <div class="row gx-30">
            <div class="col-md-12">
                <div class="th-blog blog-single mb-0">
                    <div class="blog-img">
                        <img src="{{asset('/storage/'.$blog->hero_image)}}" alt="{{$blog->hero_title}}">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="author"><i class="far fa-user"></i>By {{$blog->author}}</span>
                            <span ><i class="far fa-clock"></i>{{ $blog->created_at->format('d/M/Y') }}</span>
                        </div>
                        <h2 class="blog-title">{{$blog->title}}</h2>
                        {!! $blog->long_text !!}
                    </div>
                </div>
                <div class="share-links clearfix ">
                    <div class="row justify-content-between">
                        <div class="col-md-auto">
                            <span class="share-links-title">Tags:</span>
                            <div class="tagcloud">
                                @php
                                    $tags = explode(',', $blog->tags); // Split tags by comma into an array
                                @endphp

                                @foreach($tags as $tag)
                                    <a href="{{route('blogs')}}">{{ trim($tag) }}</a> <!-- Assuming you want each tag to link to 'blog.html' -->
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-auto text-xl-end">
                            <span class="share-links-title">Share:</span>
                            <div class="th-social style2 align-items-center">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{env('APP_URL')}}/{{ route('blogsfull', ['slug' => $blog->slug]) }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?url={{env('APP_URL')}}/{{ route('blogsfull', ['slug' => $blog->slug]) }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{env('APP_URL')}}/{{ route('blogsfull', ['slug' => $blog->slug]) }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div><!-- Share Links Area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection


