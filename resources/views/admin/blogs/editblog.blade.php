@extends('admin.layout')
@section('title', 'Edit Blogs')


@section('section-wrapper')


 <!-- Page content -->
 <div class="pagetitle">
    <h1>Edit Blog</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">Edit Blog</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Blog</h5>

            <!-- Form for adding property -->
            <form action="{{route('admin_blog_edit_post')}}" method="POST" enctype="multipart/form-data">
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
              <input type="text" name="id" value="{{$blog->id}}" hidden>
              <div class="mb-3">
                <label for="name" class="form-label">Hero Title</label>
                <input type="text" class="form-control" id="name" name="hero_title" value="{{$blog->hero_title}}" required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Blog Title</label>
                <input type="text" class="form-control" id="name" name="title" value="{{$blog->title}}" required>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Author</label>
                <input type="text" class="form-control" id="name" name="author" value="{{$blog->author}}" required>
              </div>

              <div class="mb-3">
                <label for="images" class="form-label">Update Hero Image</label>
                <input type="file" class="form-control" id="images" name="hero_image"  accept="image/*" value="{{ $blog->hero_image }}">
              </div>

              <div class="mb-3">
                <label for="short_description" class="form-label">Short Description</label>
                <textarea class="form-control" id="short_description" name="small_description" rows="10" required>{{$blog->small_description}}</textarea>
              </div>


              <div class="mb-3">
                <textarea id="blogDescription" name="long_text">{!!$blog->long_text!!}</textarea>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Tags (Comma Seprated)</label>
                <input type="text" class="form-control" id="name" name="tags" value="{{$blog->tags}}" required>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form><!-- End Form for adding property -->

          </div>
        </div>

      </div>
    </div>
  </section>




@endsection


@section('scripts')

<script>
    tinymce.init({
      selector: '#blogDescription',
      height: 600,

      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>
@endsection
