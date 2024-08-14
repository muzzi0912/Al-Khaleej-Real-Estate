@extends('admin.layout')
@section('title', 'Dashboard')


@section('section-wrapper')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <div class="col-lg-12">
        <div class="row">


          <div class="col-xxl-3 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Leads <span>| Weeakly</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-magnet"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['totalWeeklyInquiries']}}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-xxl-3 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Leads <span>| Today</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-magnet"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['totalDailyInquiries']}}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Properties  <span>| Listed</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-house"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['total_properties']}}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Properties  <span>| Listed</span></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-house"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['total_projects']}}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-xl-12">
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Agents <span>| Listed</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['total_agents']}}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Categories </h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-house"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['total_categories']}}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Sub Categories</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-house"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['total_sub_categories']}}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Contacts</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-building"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['total_contacts']}}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Brands Logos</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-house-check"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['total_brands']}}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Blogs</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-map"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$data['total_blogs']}}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>







      </div>

    </div>
  </section>
@endsection
