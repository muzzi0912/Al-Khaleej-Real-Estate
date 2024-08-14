@extends('admin.layout')
@section('title', 'Inquires')

@section('css-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.foundation.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.foundation.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
@endsection


@section('section-wrapper')

    <!-- Page content -->
    <div class="pagetitle">
        <h1>Inquires</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_inquires')}}">Home</a></li>
            <li class="breadcrumb-item active">Inquiries</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Inquiries List</h5>

                <!-- Table with stripped rows -->
                <table class="display nowrap" style="width:100%" id="table-properties">
                  <thead>
                    <tr>
                      <th>Type</th>
                      <th>Information</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Property Type</th>
                      <th>Message</th>

                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($inquiries as $data )
                    <tr>
                        <td>{{$data->inquiry_type}}</td>
                        <td>{{$data->information}}</td>
                        <td>{{$data->first_name}}</td>
                        <td>{{$data->last_name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone_number}}</td>
                        <td>{{$data->property_type}}</td>
                        <td>{{$data->message}}</td>
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.foundation.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.foundation.js"></script>

<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>

<script>

$(document).ready(function() {
    var table = new DataTable('#table-properties', {
        responsive: {
            details: {
                display: DataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return 'Details for ' + data[0] + ' ' + data[1];
                    }
                }),
                renderer: DataTable.Responsive.renderer.tableAll()
            }
        },
        dom: 'Bfrtip', // Add this line to include the buttons
        buttons: [
            'csv'
        ]
    });
});

</script>


@endsection
