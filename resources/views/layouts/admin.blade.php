<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.admin.head')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('partials.admin.header')
    <!-- /.navbar -->

    <!-- Main Sidebar -->
    @include('partials.admin.sidebar')
    <!-- /. Main Sidebar -->

    <!-- Content Wrapper. Contains page content -->
    @include('partials.admin.breathcam')
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    @include('partials.admin.footer')
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  @include('partials.admin.default-js')
</body>

</html>