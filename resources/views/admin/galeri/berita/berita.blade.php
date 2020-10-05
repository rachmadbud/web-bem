@extends('admin.component.master')

@section('content')

@include('sweetalert::alert')
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
                  <a href="" class="btn btn-primary">Tambah</a>
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
                          <td>{!!$data->caption!!}</td>
                          <td>
                            <button href="kegiatan/{{$data->id}}/delete" id="delete"><i class="fad fa-trash"></i></button>
                            <form action="" method="post" id="deleteForm">
                              @csrf
                              @method("DELETE")
                              <input type="submit" value="Hapus" class="btn btn-danger" style="display: none">
                            </form>
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


<!-- Delete Form -->
<script>
  $('button#delete').on('click', function(e){
    e.preventDefault();
    var href = $(this).attr('href');

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.isConfirmed) {

        document.getElementById('deleteForm').action = href;
        document.getElementById('deleteForm').submit();
      }
    })
  })
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endpush
