@extends('admin.layout')
@section('title', 'Edit Sub Category')


@section('section-wrapper')

 <!-- Page content -->
 <div class="pagetitle">
    <h1>Edit Sub Category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">Edit Sub Category</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Sub Category</h5>

            <!-- Form for adding sub-category -->
            <form action="{{route('admin_new_sub_category_update')}}" method="POST">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <input type="text" value="{{$subCategory->id}}" name="id" hidden>
              <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id" required>
                  @foreach ($categories as $data )
                  <option value="{{ $data->id }}" {{ $subCategory->category_id == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Sub Category Name</label>
                <input type="text" class="form-control"  name="name" required value="{{ old('name') ? old('name') : $subCategory->name }}">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form><!-- End Form for adding sub-category -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
