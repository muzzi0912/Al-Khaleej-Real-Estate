@extends('admin.layout')
@section('title', 'All Pages Seo')


@section('css-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.foundation.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.foundation.css">
@endsection

@section('section-wrapper')

<div class="pagetitle">
    <h1>All Pages SEO</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
        <li class="breadcrumb-item active">All Pages SEO</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Main Content -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pages List</h5>

            <!-- Table with stripped rows -->
            <table class="display nowrap" style="width:100%" id="table-properties">
              <thead>
                <tr>
                  <th>Targeted Slug</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Author</th>
                  <th>Keyword</th>
                  <th>Robot</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
               @foreach ($seoRecords as $data)
               <tr>
                <td>{{$data->slug}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->author}}</td>
                <td>{{$data->keyword}}</td>
                <td>
                    @if($data->robot)
                        Enable
                    @else
                        Disable
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin_newseo_destroy', ['id' => $data->id]) }}" class="btn btn-sm btn-danger">Delete</a>
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
</script>


@endsection
