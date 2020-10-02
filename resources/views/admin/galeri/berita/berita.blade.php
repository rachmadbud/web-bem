@extends('guest.component.master')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        {{-- looping --}}
        
        <div class="col-md-4 my-4">
          <div class="card mb-4 shadow-sm">
            <img class="img-fluid" height="280" width="340" src="{{ asset('')}}" alt="">
            <div class="card-body">
              <p class="card-text">asassds.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button>
                </div>
                <small class="text-muted">tanggal</small>
              </div>
            </div>
          </div>
        </div>  

        {{-- end looping --}}
  </div>

@endsection