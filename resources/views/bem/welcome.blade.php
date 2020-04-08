@extends('layouts.master')

@section('title', 'Welcome')

@section('content')


<header>
    <div class="header-area">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 ">
                        <div class="social_media_links">
                            <a href="https://twitter.com/BEMFIK_UBL">
                                <i class="ti-twitter-alt"></i>
                            </a>
                            <a href="https://web.facebook.com/bem.fikubl">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/bemfik_ubl/">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i> BEM-FIK@student.ubl.ac.id</a></li>
                                <li><a href="#"> <i class="fa fa-phone"></i> 821-0920-1022</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{url('bem/welcome')}}">
                                    <img src="../img_bem/logoc.png " alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{url('/bem/welcome')}}">home</a></li>
                                        <li><a href="{{url('bem/about')}}">About Us</a></li>
                                        {{-- <li><a href="service.html">Services</a></li> --}}
                                        <li><a href="#">Struktur<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                @foreach ($images as $image)
                                                <li><a href="">{{$image->filename}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="#">Galeri <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                 <li><a href="{{url('/kegiatan')}}">Kegiatan</a></li>
                                                <li><a href="{{url('/berita')}}">Berita</a></li>
                                                <li><a href="{{url('informasi')}}">Informasi</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('bem/contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                {{-- <div class="book_btn d-none d-lg-block">
                                    <a href="#">HAHHAH</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->



    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2"> {{--Background --}}
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> Selamat <br>
                                    Datang Di </h3>
                                <h3>website Resmi</h3>  <br>
                                <h3>BADAN EKSEKUTIF MAHASISWA.</h3>
                                <div class="video_service_btn">
                                    <a href="videoProfile.avi" class="boxed-btn3-white"> <i class="fa fa-play"></i>Lihat Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> Fakultas Ilmu Komputer <br>
                                    Universitas Bandar Lampung </h3>
                                <div class="video_service_btn">
                                    <a href="videoProfile.avi" class="boxed-btn3-white"> <i class="fa fa-play"></i>Tentang BEM</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
@endsection