@extends('admin.layout')
@section('title', 'Add New Seo')


@section('section-wrapper')

<div class="pagetitle">
    <h1>Add SEO</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">Add SEO</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add New SEO</h5>

            <!-- Form to add SEO information -->
            <form action="{{route('admin_newseo')}}" method="POST">
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
              <div class="mb-3">
                <label for="author" class="form-label">Targeted Slug</label>
                <input type="text" class="form-control" id="author" name="slug" value="{{old('slug')}}" required>
              </div>

              <div class="mb-3">
                <label for="title" class="form-label">Title (50 to 60 Characters)</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" required>
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Description (70 to 160 characters)</label>
                <textarea class="form-control" id="description" name="description" value="{{old('description')}}" rows="3" required></textarea>
              </div>

              <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}" required>
              </div>

              <div class="mb-3">
                <label for="keyword" class="form-label">Keyword</label>
                <input type="text" class="form-control" id="keyword" name="keyword" value="{{old('keyword')}}" required>
              </div>


              <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="robot" name="robot" value="{{old('robot')}}">
                    <label class="form-check-label" for="robot">Robot Allow</label>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form><!-- End Form to add SEO information -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
