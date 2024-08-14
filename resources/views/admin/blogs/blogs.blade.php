@extends('admin.layout')
@section('title', 'Blogs')


@section('section-wrapper')

<div class="pagetitle">
    <h1>All Blogs</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">All Blogs</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
     @foreach ($blogs as $data )
      <!-- Example Brand Logo Cards -->
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{asset('/storage/'.$data->hero_image)}}" class="card-img-top" alt="Brand Logo 1">
          <div class="card-body">
            <h5 class="card-title">{{$data->title}}</h5>
            <p class="card-text">{{ $data->small_description }}<br>{{ $data->created_at->format('d/m/Y h:i a') }}</p>

            <a href="{{ route('admin_blog_edit', ['id' => $data->id]) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('admin_blog_destroy', ['id' => $data->id]) }}" class="btn btn-danger">Delete</a>
          </div>
        </div>
      </div>
      <!-- End Example Brand Logo Cards -->
        @endforeach
    </div>
  </section>

@endsection
