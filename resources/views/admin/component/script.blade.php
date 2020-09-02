
<!-- jQuery -->
<script src="{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-lte/dist/js/adminlte.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('admin-lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

@stack('script')


<script src="{{ asset('admin-lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    @stack('script2')


</body>
</html>