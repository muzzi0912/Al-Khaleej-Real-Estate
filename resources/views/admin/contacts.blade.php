@extends('admin.layout')
@section('title', 'Contacts')


@section('section-wrapper')

<div class="pagetitle">
    <h1>All Contacts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">All Contacts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact List</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Message</th>

                  </tr>
                </thead>
                <tbody>

                @foreach ($contacts as  $data)
                <tr>
                    <td>{{$data->first_name}}</td>
                    <td>{{$data->last_name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->category}}</td>
                    <td>{{$data->message}}</td>
                  </tr>
                @endforeach
                  <!-- End of example rows -->
                </tbody>
              </table><!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection
