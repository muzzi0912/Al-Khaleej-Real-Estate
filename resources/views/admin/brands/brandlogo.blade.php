@extends('admin.layout')
@section('title', 'Brands Logo')


@section('section-wrapper')

<div class="pagetitle">
    <h1>All Brand Logos</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">All Brand Logos</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
        @foreach ($logos as $data)
             <!-- Example Brand Logo Cards -->
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="{{ asset('/storage/'.$data->image) }}" class="card-img-top" alt="Brand Logo 1">
          <div class="card-body">
            <h5 class="card-title">Brand Logo 1</h5>
            <p class="card-text">{{ $data->created_at->format('d/m/Y h:i a') }}</p>
            <a href="{{ route('admin_brandlogonew_destroy', ['id' => $data->id]) }}" class="btn btn-sm btn-danger">Delete</a>
          </div>
        </div>
      </div>
      <!-- End Example Brand Logo Cards -->
        @endforeach
    </div>
  </section>

@endsection
