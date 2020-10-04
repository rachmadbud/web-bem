@extends('guest.component.master')

@section('content')


<main id="main" class="py-5">

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="portfolio-details-container">

        <div class="owl-carousel portfolio-details-carousel">
          <img src="{{ asset('image-kegiatan/' . $data->foto )}}" alt="">
          </div>
      </div>

      <div class="portfolio-description">
        <h2>{{ $data->judul}}</h2>
        <p>
          {{ $data->caption}}
        </p>
      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection