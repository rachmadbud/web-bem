  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><img src="{{ asset('img_bem/logoc.png')}}" alt=""></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="{{ url('/')}}">Home</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="drop-down"><a href="">Galeri</a>
                <ul>
                  <li><a href="{{ url('/galeri/kegiatan')}}">Kegiatan</a></li>
                  <li><a href="{{ url('/galeri/berita')}}">Berita</a></li>
                  <li><a href="#">Informasi</a></li>
                </ul>
              </li>
              <li><a href="{{ url('simetri') }}">Pengurus</a></li>

            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </div>

    </div>
  </header><!-- End Header -->