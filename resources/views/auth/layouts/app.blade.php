<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>GPUS-Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('public/admin/vendors/feather/feather.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/admin/vendors/ti-icons/css/themify-icons.css')}}"  />
    <link rel="stylesheet" href="{{ asset('public/admin/vendors/css/vendor.bundle.base.css')}}"  />
    <link rel="stylesheet" href="{{ asset('public/admin/vendors/mdi/css/materialdesignicons.min.css')}}"  >
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{ asset('public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" 
    />
    <link rel="stylesheet" href="{{ asset('public/admin/vendors/ti-icons/css/themify-icons.css')}}"  />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('public/admin/js/select.dataTables.min.css')}}" 
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('public/admin/css/vertical-layout-light/style.css')}}"  />

    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('public/admin/images/gpus-logo.png')}}"  />

    <style>
      i{
        font-size: 24px;
      }
    </style>


    @stack('css')
  </head>

  <body class="sidebar-dark">
    <div class="container-scroller">

        @include('auth.includes.navbar')

        <div class="container-fluid page-body-wrapper">

            @include('auth.includes.settings')

            @include('auth.includes.sidebar')

            @yield('main-content')

        </div>
        <!-- page-body-wrapper ends -->
  
      </div>
      <!-- container-scroller -->
  
  
      
      <!-- plugins:js -->
      <script src="{{ asset('public/admin/vendors/js/vendor.bundle.base.js')}}" ></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{ asset('public/admin/vendors/chart.js/Chart.min.js')}}" ></script>
      <script src="{{ asset('public/admin/vendors/datatables.net/jquery.dataTables.js')}}" ></script>
      <script src="{{ asset('public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}" ></script>
      <script src="{{ asset('public/admin/js/dataTables.select.min.js')}}" ></script>
  
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{ asset('public/admin/js/off-canvas.js')}}" ></script>
      <script src="{{ asset('public/admin/js/hoverable-collapse.js')}}" ></script>
      <script src="{{ asset('public/admin/js/template.js')}}" ></script>
      <script src="{{ asset('public/admin/js/settings.js')}}" ></script>
      <script src="{{ asset('public/admin/js/todolist.js')}}" ></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="{{ asset('public/admin/js/dashboard.js')}}" ></script>
      <script src="{{ asset('public/admin/js/Chart.roundedBarCharts.js')}}" ></script>
      <!-- End custom js for this page-->

      @stack('js')
  </body>
  </html>