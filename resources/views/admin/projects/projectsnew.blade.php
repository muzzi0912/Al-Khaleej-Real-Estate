@extends('admin.layout')
@section('title', 'Add New Properties')


@section('section-wrapper')

 <!-- Page content -->
 <div class="pagetitle">
    <h1>Properties</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">Add Property</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Properties</h5>

                    <!-- Form for adding property -->
                    <form action="{{route('admin_project_new')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="agent_id" class="form-label">Agent</label>
                            <select class="form-select" id="agent_id" name="agent_id" required>
                                @foreach ($agents as $data )
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="developer_image" class="form-label">Developer Image</label>
                            <input type="file" class="form-control" id="developer_image" name="developer_image" required value="{{old('developer_image')}}">
                        </div>

                        <div class="mb-3">
                            <label for="thumbnail_image" class="form-label">Thumbnail Image</label>
                            <input type="file" class="form-control" id="thumbnail_image" name="thumbnail_image" required value="{{old('thumbnail_image')}}" >
                        </div>

                        <div class="mb-3">
                            <label for="thumbnail_image" class="form-label">Cover Image</label>
                            <input type="file" class="form-control" id="thumbnail_image" name="hero_image" required value="{{old('cover_image')}}">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required value="{{old('price')}}">
                        </div>

                        <div class="mb-3">
                            <label for="developer_name" class="form-label">Developer Name</label>
                            <input type="text" class="form-control" id="developer_name" name="developer_name" required value="{{old('developer_name')}}">
                        </div>

                        <div class="mb-3">
                            <label for="hand_over_date" class="form-label">Hand Over Date</label>
                            <input type="text" class="form-control" id="hand_over_date" name="hand_over_date" required value="{{old('hand_over_date')}}">
                        </div>

                        <div class="mb-3">
                            <label for="during_construction" class="form-label">During Construction</label>
                            <input type="text" class="form-control" id="during_construction" name="during_construction" required value="{{old('during_construction')}}">
                        </div>

                        <div class="mb-3">
                            <label for="during_hand_over" class="form-label">During Hand Over</label>
                            <input type="text" class="form-control" id="during_hand_over" name="during_hand_over" required value="{{old('during_hand_over')}}">
                        </div>

                        <div class="mb-3">
                            <label for="boucher_pdf" class="form-label">Boucher PDF</label>
                            <input type="file" class="form-control" id="boucher_pdf" name="project_boucher_image" required value="{{old('boucher_pdf')}}">
                        </div>

                        <div class="mb-3">
                            <label for="location_url" class="form-label">Location URL</label>
                            <input type="text" class="form-control" id="location_url" name="project_location_url" required value="{{old('project_location_url')}}">
                        </div>

                        <div class="mb-3">
                            <label for="project_images" class="form-label">Project Images</label>
                            <input type="file" class="form-control" id="project_images" name="project_images[]" multiple required>
                        </div>

                        <div class="mb-3">
                            <textarea id="blogDescription" name="long_description">{{ old('long_description') }}</textarea>

                        </div>

                        <div class="mb-3">
                            <label for="project_title" class="form-label">Project Title</label>
                            <input type="text" class="form-control" id="project_title" name="project_name" required value="{{old('project_title')}}">
                        </div>

                        <div class="mb-3">
                            <label for="project_address" class="form-label">Project Address</label>
                            <input type="text" class="form-control" id="project_address" name="project_address" required value="{{old('project_address')}}">
                        </div>

                        <div class="mb-3">
                            <label for="project_video" class="form-label">Project Video</label>
                            <input type="text" class="form-control" id="project_video" name="project_video" required value="{{old('project_video')}}">
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
      plugins: 'table',
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

