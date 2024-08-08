<!DOCTYPE html>
<html lang="en">
@include('admin/header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
         
    <img class="animation__shake" src="{{asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
@include('admin/navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('admin/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('admin/breadcrumb')

    <section class="content">
      <div class="container-fluid">
      @yield('content')
      </div>
    </section>

  </div>
 
  @include('admin/footer')
  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin/script')
</body>
</html>
