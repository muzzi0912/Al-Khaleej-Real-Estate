@extends('admin.layout')
@section('title', 'Category')


@section('section-wrapper')

<div class="pagetitle">
    <h1>Categories</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">Categories</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories List</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>S.No</th>

                    <th>Category Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>

                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ( $categories as $data)
                  <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{ $data->created_at->format('d/m/Y h:i a') }}</td>
                    <td>{{ $data->updated_at->format('d/m/Y h:i a') }}</td>
                    <td>
                        <a href="{{ route('admin_category_update', ['id' => $data->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ route('admin_category_destroy', ['id' => $data->id]) }}" class="btn btn-sm btn-danger" onclick="confirmDeletion(event)">Delete</a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table><!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection

@section('scripts')
<script>
    function confirmDeletion(event) {
        if (!confirm('Are you sure you want to delete this item?')) {
            event.preventDefault(); // Prevent the default action (navigation) if the user cancels
        }
    }
    </script>
@endsection
