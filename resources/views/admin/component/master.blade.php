@include('admin.component.head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        
       
    @include('admin.component.navbar')



  @include('admin.component.sidebar')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  @include('admin.component.footer')

<!-- REQUIRED SCRIPTS -->
  @include('admin.component.script')
