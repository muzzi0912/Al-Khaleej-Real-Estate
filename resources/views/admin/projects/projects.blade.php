@extends('admin.layout')
@section('title', 'Properties')

@section('css-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.foundation.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.foundation.css">
@endsection


@section('section-wrapper')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">Properties</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Properties List</h5>

                    <!-- Table with stripped rows -->
                    <table class="display nowrap" style="width:100%" id="table-properties">
                        <thead>
                            <tr>
                                <th>Properties Name</th>
                                <th>Agent Name</th>
                                <th>Price</th>
                                <th>Developer Name</th>
                                <th>Hand Over Date</th>
                                <th>During Construction</th>
                                <th>During Hand Over</th>
                                <th>Properties Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $data)
                            <tr>
                                <td>{{ $data->project_name }}</td>
                                <td>{{ $data->agent->name }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->developer_name }}</td>
                                <td>{{ $data->hand_over_date }}</td>
                                <td>{{ $data->during_construction }}</td>
                                <td>{{ $data->during_hand_over }}</td>
                                <td>{{ $data->project_address }}</td>
                                <td>
                                    <a href="{{ route('admin_project_editproject', ['id' => $data->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('admin_project_destroy', ['id' => $data->id]) }}" class="btn btn-sm btn-danger"  onclick="confirmDeletion(event)">Delete</a>
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.foundation.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.foundation.js"></script>

<script>

new DataTable('#table-properties', {
    responsive: {
        details: {
            display: DataTable.Responsive.display.modal({
                header: function (row) {
                    var data = row.data();
                    return 'Details for ' + data[0] + ' ' + data[1];
                }
            }),
            renderer: DataTable.Responsive.renderer.tableAll()
        }
    }
});

function confirmDeletion(event) {
        if (!confirm('Are you sure you want to delete this item?')) {
            event.preventDefault(); // Prevent the default action (navigation) if the user cancels
        }
    }
</script>





@endsection
