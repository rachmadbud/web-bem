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
                  <a href="{{ route('admin.kegiatan.create')}}" class="btn btn-primary">Tambah</a>
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Foto</th>
                      <th>Caption</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 0; ?>
                      @foreach ($datas as $data)
                    <?php $i++; ?>
                        <tr>
                          <td> {{ $i }} </td>
                          <td>{{$data->judul}}</td>
                          <td>
                            <ul class="list-inline">
                                <li class="list-inline-item center">
                                    <img alt="Avatar" class="table-avatar" widht="50" height="50" src="{{ asset('image-kegiatan/' . $data->foto )}}">
                                </li>
                            </ul>
                          </td>
                          <td>{{$data->caption}}</td>
                          <td>
                            <a href="" class="btn btn-warning btn-sm">edit</a>
                            <a href="" class="btn btn-danger btn-sm">delete</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
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
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush
