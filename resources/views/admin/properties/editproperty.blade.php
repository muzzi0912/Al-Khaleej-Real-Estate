@extends('admin.layout')
@section('title', 'Edit Propertie')


@section('section-wrapper')

 <!-- Page content -->
 <div class="pagetitle">
    <h1>Properties</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">Edit Property</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Property</h5>

            <!-- Form for adding property -->
            <form action="{{route('admin_new_properties_update')}}" method="POST" enctype="multipart/form-data">
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
                <input type="text" name="id" value="{{$property->id}}" hidden>
              <div class="mb-3">
                <label for="agent_id" class="form-label">Agent</label>
                <select class="form-select" id="agent_id" name="agent_id" required>
                    @foreach ($agents as $data )
                    <option value="{{ $data->id }}" {{ $property->agent_id == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id" required>
                  @foreach ($categories as $data )
                  <option value="{{ $data->id }}" {{ $property->category_id == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="sub_category_id" class="form-label">Sub-Category</label>
                <select class="form-select" id="sub_category_id" name="sub_category_id" required>
                  @foreach ($subcategories as $data )
                  <option value="{{ $data->id }}" {{ $property->sub_category_id == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Property Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : $property->name }}" required>
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') ? old('price') : $property->price }}" required>
              </div>
              <div class="mb-3">
                <label for="short_description" class="form-label">Short Description</label>
                <textarea class="form-control" id="short_description" name="short_description" rows="3"  required>{{ old('short_description') ? old('short_description') : $property->short_description }}</textarea>
              </div>
              <div class="mb-3">
                <label for="long_description" class="form-label">Long Description</label>
                <textarea id="blogDescription" name="long_description">{!! old('long_description', $property->long_description) !!}</textarea>
              </div>
              <div class="mb-3">
                <label for="total_beds" class="form-label">Total Beds</label>
                <input type="number" class="form-control" id="total_beds" name="total_beds" value="{{ old('total_beds') ? old('total_beds') : $property->total_beds }}" required>
              </div>
              <div class="mb-3">
                <label for="total_washrooms" class="form-label">Total Washrooms</label>
                <input type="number" class="form-control" id="total_washrooms" name="total_washrooms" value="{{ old('total_washrooms') ? old('total_washrooms') : $property->total_washrooms }}" required>
              </div>
              <div class="mb-3">
                <label for="sq_ft" class="form-label">Sq. Ft.</label>
                <input type="number" class="form-control" id="sq_ft" name="sq_ft" value="{{ old('sq_ft') ? old('sq_ft') : $property->sq_ft }}" required>
              </div>
              <div class="mb-3">
                <label for="images" class="form-label">Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*" >
              </div>
              <div class="mb-3">
                <label for="aminities" class="form-label">Amenities (comma-separated)</label>
                <input type="text" class="form-control" id="aminities" name="aminities" value="{{ old('aminities') ? old('aminities') : $property->aminities }}" required>
              </div>
              <div class="mb-3">
                <label for="location_map_url" class="form-label">Location Map URL</label>
                <input type="url" class="form-control" id="location_map_url" name="location_map_url" value="{{ old('location_map_url') ? old('location_map_url') : $property->location_map_url }}">
              </div>
              <div class="mb-3">
                <label for="video_url" class="form-label">Video URL</label>
                <input type="url" class="form-control" id="video_url" name="video_url" value="{{ old('video_url') ? old('video_url') : $property->video_url }}">
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

