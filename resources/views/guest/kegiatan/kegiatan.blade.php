@extends('guest.component.master')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach ($datas as $data)
        
        <div class="col-md-4 my-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset('jajaran/kabinet.PNG') }}" alt="">
            <div class="card-body">
              <p class="card-text">{{$data->caption}}.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">{{$data->created_at}}</small>
              </div>
            </div>
          </div>
        </div>   
        @endforeach
  </div>

@endsection