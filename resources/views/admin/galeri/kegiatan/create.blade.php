@extends('admin.component.master')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row my-3">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                        Tambah Dokumentasi Kegiatan
                        </h3>
                        <!-- tools box -->
                        <div class="card-tools">
                        
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('admin.kegiatan.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body pad">
                            <div class="mb-1">
                                <label for="exampleInputEmail1"><h3>Judul Kegiatan</h3></label>
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul">
                            </div>    
                        </div>
                        <div class="card-body pad">
                            <div class="mb-1">
                                <label for="exampleInputFile"><h3>Input Foto</h3></label>
                                <div class="custom-file">
                                    <input type="file" name="file" id="exampleInputFile" >
                                </div>
                            </div>    
                        </div>
                        <div class="card-body pad">
                            <div class="mb-1">
                                <label for=""><h1>Caption</h1></label>
                                <textarea class="textarea" name="caption" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                </textarea>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
        <!-- /.content -->

@endsection

@push('script2')

@endpush

