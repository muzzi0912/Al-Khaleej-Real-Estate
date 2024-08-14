@extends('admin.layout')
@section('title', 'Add New Brands Logo')


@section('section-wrapper')
<div class="pagetitle">
    <h1>Add Brand Logo</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin_brandlogonew')}}">All Brand Logos</a></li>
        <li class="breadcrumb-item active">Add Brand Logo</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Upload Brand Logo</h5>

            <!-- Form to upload brand logo -->
            <form action="{{route('admin_brandlogonew')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
              </div>
              <button type="submit" class="btn btn-primary">Upload</button>
            </form><!-- End Form to upload brand logo -->

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection
