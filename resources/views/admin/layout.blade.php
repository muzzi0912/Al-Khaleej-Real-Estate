<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Al Khaleej Real Estate Dubai  </title>


  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



   <!-- Vendor CSS Files -->
   <link href="{{asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
   <link href="{{asset('admin_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin_assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
   <link href="{{asset('admin_assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
   <link href="{{asset('admin_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
   <link href="{{asset('admin_assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet">

  @yield('css-content')



  {!! htmlScriptTagJsApi() !!}
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-center  ">
      <a href="{{route('admin_home')}}" class="logo d-flex align-items-center">
        <img class="d-none d-lg-block" src="{{asset('assets/al-khaleej-logo - admin.jpg')}}" alt="" width="180px" height="50px">
        <!-- <span class="d-none d-lg-block">Al Khaleej Real Estate</span> -->
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('admin_assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Administrator</h6>
              <span style="color: red;font-weight: bolder;">Al Khaleej Real Estate Dubai</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

              <button class="dropdown-item d-flex align-items-center"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </button>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Agent Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#agent-nav" data-bs-toggle="collapse">
            <i class="bi bi-person"></i><span>Agents </span>

            <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="agent-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_agents')}}">
              <i class="bi bi-circle"></i><span>All Agents</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin_new_agents')}}">
              <i class="bi bi-circle"></i><span>Add Agent</span>
            </a>
          </li>
        </ul>
      </li><!-- End Agents Nav -->

      <!-- Category Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_category')}}">
              <i class="bi bi-circle"></i><span>All Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin_new_category')}}">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Categories Nav -->

      <!-- Sub-Category Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sub-category-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Sub-Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sub-category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_sub_category')}}">
              <i class="bi bi-circle"></i><span>All Sub-Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin_new_sub_category')}}">
              <i class="bi bi-circle"></i><span>Add Sub-Category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Sub-Categories Nav -->

      <!-- Project Management -->
      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#project-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-folder"></i><span>Properties</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="project-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{route('admin_project')}}">
                <i class="bi bi-circle"></i><span>All Properties</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin_project_new')}}">
                <i class="bi bi-circle"></i><span>Add Properties</span>
              </a>
            </li>
          </ul>
      </li><!-- End Projects Nav -->


      <!-- Property Management -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#property-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-building"></i><span>Properties</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="property-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_properties')}}">
              <i class="bi bi-circle"></i><span>All Properties</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin_new_properties')}}">
              <i class="bi bi-circle"></i><span>Add Property</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Properties Nav -->



      <!-- Inquiry Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#inquiry-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-envelope"></i><span>Inquiries  <span class="badge badge-dark">{{$inquiry}}</span></span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="inquiry-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_inquires')}}">
              <i class="bi bi-circle"></i><span>All Inquiries</span>
            </a>
          </li>
        </ul>
      </li><!-- End Inquiries Nav -->

      <!-- Inquiry Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#leads" data-bs-toggle="collapse" href="#">
          <i class="bi bi-envelope"></i><span>Leads  <span class="badge badge-dark">{{$totalLeads}}</span></span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="leads" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_leads')}}">
              <i class="bi bi-circle"></i><span>All Leads</span>
            </a>
          </li>
        </ul>
      </li><!-- End Inquiries Nav -->

      <!-- Listing Inquiry  -->
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#inquiry-Listing" data-bs-toggle="collapse" href="#">
          <i class="bi bi-envelope"></i><span>Listing Inquiries <span class="badge badge-dark">{{$totalListingInquiries}}</span></span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="inquiry-Listing" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_listing_inquires')}}">
              <i class="bi bi-circle"></i><span>All Inquiries</span>
            </a>
          </li>
        </ul>
      </li><!-- End Inquiries Nav --> --}}

      <!-- Contact Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-telephone"></i><span>Contacts <span class="badge badge-dark">{{$contact}}</span></span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_contacts')}}">
              <i class="bi bi-circle"></i><span>All Contacts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Contacts Nav -->

      <!-- SEO Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#seo-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>SEO</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="seo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_allseo')}}">
              <i class="bi bi-circle"></i><span>All SEO</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin_newseo')}}">
              <i class="bi bi-circle"></i><span>Add SEO</span>
            </a>
          </li>
        </ul>
      </li><!-- End SEO Nav -->

      <!-- Brand Logos Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#brand-logo-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-images"></i><span>Brand Logos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="brand-logo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_brandlogos')}}">
              <i class="bi bi-circle"></i><span>All Brand Logos</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin_brandlogonew')}}">
              <i class="bi bi-circle"></i><span>Add Brand Logo</span>
            </a>
          </li>
        </ul>
      </li><!-- End Brand Logos Nav -->

      <!-- Blogs Management -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blog-logo-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-map"></i><span>Blogs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blog-logo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin_blog')}}">
              <i class="bi bi-circle"></i><span>All Blogs</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin_blog_new')}}">
              <i class="bi bi-circle"></i><span>Add New Blog</span>
            </a>
          </li>
        </ul>
      </li><!-- End Blogs-->

    </ul>

  </aside><!-- End Sidebar -->

  <main id="main" class="main">

    @yield('section-wrapper')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Al Khaleej Real Estate Dubai</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://gfswebdevelopmentteam.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://gfswebdevelopmentteam.com/nice-admin-bootstrap-admin-html-template/ -->
      Developed & Managed By: <a href="https://siliconsofts.com/" target="target_blank">Silicon Softs</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin_assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin_assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin_assets/js/main.js')}}"></script>
  <script src="https://cdn.tiny.cloud/1/1alsvwtue8aihc2eexp7buysubzpfhhu8n2w5xarfjmnltkc/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

  @yield('scripts')




</body>

</html>
