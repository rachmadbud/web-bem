@extends('guest.component.master')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach ($datas as $data)
        
        <div class="col-md-4 my-4">
          <div class="card mb-4 shadow-sm">
            <div class="title">
              <center><h2>{{Str::limit($data->judul, 20)}}</h2></center>
            </div>
            <img class="img-fluid" height="280" width="340" src="{{ asset('image-kegiatan/' . $data->foto )}}" alt="">
            <div class="card-body">
              <p class="card-text">{{ Str::limit($data->caption, 100) }}.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{route('berita.detail', $data->id)}} " class="btn btn-sm btn-outline-secondary">Detail</a>
                </div>
                <small class="text-muted">{{$data->created_at}}</small>
              </div>
            </div>
          </div>
        </div>   
        @endforeach
  </div>

  <div class="pagination justify-content-center">
    {{ $datas->links() }}
  </div>

@endsection