@extends('admin.layout')
@section('title', 'Agents')


@section('section-wrapper')

<div class="pagetitle">
    <h1>Agents</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_agents')}}">Home</a></li>
            <li class="breadcrumb-item active">Agents</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Agents List</h5>
                  <!-- Table with stripped rows -->
                  <table class="table datatable">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Descignation</th>
                              <th>WhatsApp Number</th>
                              <th>Phone Number</th>
                              <th>Profile Image</th>
                              <th>Rating</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>


                        @foreach ($agents as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->descignation}}</td>
                            <td>{{$data->whatsapp_number}}</td>
                            <td>{{$data->phone_number}}</td>
                            <td><img src="{{asset('/'.$data->profile_image )}}" alt="Profile Image" class="img-fluid"
                                    style="max-width: 50px;"></td>
                            <td>{{$data->rating}}</td>
                            <td>
                                <a href="{{ route('admin_agents_edit_agent', ['id' => $data->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('admin_agents_destroy', ['id' => $data->id]) }}" onclick="confirmDeletion(event)" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
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
