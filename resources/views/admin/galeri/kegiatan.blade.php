@extends('admin.component.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <!-- /.card -->
    
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Caption</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
@endsection

@push('script')
<script>
  $(function () {
    $('#datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('admin.author.data') }}',
      columns: [
        {data : 'DT_RowIndex', orderable: false, searchable: false},
        {data : 'id'},
        {data : 'judul'},
        {data : 'foto'},
        {data : 'caption'},
        {data : 'action'}
      ]
    });
  });
</script>
@endpush
