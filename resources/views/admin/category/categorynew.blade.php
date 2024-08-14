@extends('admin.layout')
@section('title', 'Add New Category')


@section('section-wrapper')

<div class="pagetitle">
    <h1>Add New Category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">Add New Category</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Category Details</h5>

            <!-- Form to add a new category -->
            <form id="addCategoryForm" method="POST" action="{{route('admin_new_category')}}">
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif

                @csrf
              <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="name" required value="{{ old('name') }}">
              </div>

              <button type="submit" class="btn btn-primary">Add Category</button>
            </form><!-- End Form to add a new category -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
