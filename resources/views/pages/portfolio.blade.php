@extends('layouts.app')

@section('title')
    Portfolio
@endsection

@section('content')
    
<!-- awal header -->

<div class="header">
    <div class="container">
      <div class="row">
        <div class="col text-center mt-5">
          <img src="{{url('frontend/img/logo.png')}}">
          <h2 class="mt-3">AJI WAHYUGI</h2>
          <h4 class="mb-5">UX/UI \ Frontend \ Backend Web Developer</h4>
        </div>
      </div>
    </div>
  </div>

<!-- akhir header -->


<div class="main about" >
<div class="container" style="margin-bottom: 100px; margin-top: 80px;">
<div class="row">
  <div class="col-md-6 col-lg-6">
    <img src="{{url('frontend/libraries/img/2.png')}}" width="450px" class="pt-5">
  </div>
  <div class="col-md-6 col-lg-6">
    <span class="font-weight-bold">Intro</span>
    <h2 class="font-weight-bold">About Me</h2>
    <p class="">Since starting my journey as a student for almost 4 years, I have studied both on and off campus and collaborated with talented people to create small startup teams. I am secretly confident, naturally curious, and constantly learning to fix problems in the field I am studying</p>
    <table class="table table-borderless">
      <tbody>
        <tr>
          <th>Nama</th>
          <td>:</td>
          <td>Aji Wahyugi</td>
        </tr>
        <tr>
          <th>Phone</th>
          <td>:</td>
          <td>+62 896-4392-9650</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>:</td>
          <td>ajiwahyugi.carrer@gmail.com</td>
        </tr>
      </tbody>
    </table>

    <h5 class="font-weight-bold">My Hobby</h5>
    <span class="p-2">
      <i class="fa fa-book"></i>
      Book
    </span>
    <span class="p-2">
      <i class="fa fa-music"></i>
      Music
    </span>
    <span class="p-2">
      <i class="fa fa-balance-scale-left"></i>
      Realtime
    </span>
    <span class="p-2">
      <i class="fa fa-gamepad"></i>
      Playing
    </span>
    <span class="p-2">
      <i class="fa fa-laptop"></i>
      Ngoding
    </span>
  </div>
</div>
</div>
</div>


<div class="main kulifikasi">
<div class="container">
<div class="row">
  <div class="col text-center pt-4">
    <h5>This is</h5>
    <h2 class="font-weight-bold" id="portfolio">My Portfolio</h2>
  </div>
</div>

<div class="row mt-3">

  <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-sm-2 pt-2 gambar">
    <img src="{{url('frontend/libraries/img/kualifikasi/8.jpg')}}" class="img-thumbnail image">
   
  </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-sm-2 pt-2 gambar">
    <img src="{{url('frontend/libraries/img/kualifikasi/4.jpg')}}" class="img-thumbnail image">
    
  </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-sm-2 pt-2 gambar">
    <img src="{{url('frontend/libraries/img/kualifikasi/5.jpg')}}" class="img-thumbnail image">
  </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-sm-2 pt-2 gambar">
    <img src="{{url('frontend/libraries/img/kualifikasi/6.jpg')}}" class="img-thumbnail image">
  </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-sm-2 pt-2 gambar">
    <img src="{{url('frontend/libraries/img/kualifikasi/7.jpg')}}" class="img-thumbnail image">
  </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-4 pt-sm-2 pt-2 gambar">
    <img src="{{url('frontend/libraries/img/kualifikasi/3.jpg')}}" class="img-thumbnail image">
  </div>
</div>

<div class="row">
  <div class="col py-3 text-center">
    <a href="">Views All</a>
  </div>
</div>
</div>
</div>


<div class="section">
<div class="container mt-5">
<div class="row mt-5">
  <div class="col-12 col-lg-7 col-md-10 col-sm-10 mt-5">
    <h1>Have a Project on Your Mind</h1>
    <p class="mt-2">I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
    <div class="btn btn-success mt-2">Contact Me</div>
  </div>
  <div class="col col-lg-5 d-none d-sm-md-block d-lg-inline">
      <img src="{{url('frontend/libraries/img/kualifikasi/10.png')}}" width="400px" height="300px">
  </div>
</div>
</div>
</div>




<div class="main offer">
<div class="container mt-5">
<div class="row mb-3">
  <div class="col text-center" id="work">
    <span>This Is</span>
    <h2 class="font-weight-bold">Work Experience</h2>
  </div>
</div>

<div class="row m-auto">
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 border offer-biodata">
    <img src="{{url('frontend/libraries/img/kualifikasi/telkom.png')}}" width="100px" height="60px" class="pt-2">
    <h5 class="pt-3 font-weight-bold">Telekomunikasi Indonesia</h5>
    <h6 class="font-weight-bold">Teknisi Indihome</h6>
    <p>Bertanggung jawab untuk pemasangan baru jaringan Wi-fi dan TV Kabel</p>
    <span>Periode :</span>
    <input type="text" value="Nov-2016 -> Juli-2017" disabled class="mb-3">
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 border offer-biodata">
    <img src="{{url('frontend/libraries/img/kualifikasi/dbs_logo.svg')}}" width="100px" height="60px" class="pt-2">
    <h5 class="pt-2 font-weight-bold">Bank DBS Singapore</h5>
    <h6 class="font-weight-bold">Telemarketing</h6>
    <p>Bertanggung jawab menawarkan pinjaman uang kepada nasabah.</p>
    <span>Periode :</span>
    <input type="text" value="Des-2017->Januari-2018" disabled class="mb-3">
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 border offer-biodata">
    <img src="{{url('frontend/libraries/img/kualifikasi/indo.png')}}" width="100px" height="50px" class="pt-3">
    <h5 class="pt-3 font-weight-bold">PT. Indomarco Prismatama</h5>
    <h6 class="font-weight-bold">Pramuniaga</h6>
    <p>Bertanggung jawab mengelola, membersihkan toko dan menjadi kasir, untuk keperluan apa saja.</p>
    <span>Periode :</span>
    <input type="text" value="Maret-2018 -> Sep-2018" disabled class="mb-3">
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 border offer-biodata">
    <img src="{{url('frontend/libraries/img/kualifikasi/sky.png')}}" width="100px" height="60px" class="pt-2">
    <h5 class="pt-2 font-weight-bold">Skyreach</h5>
    <h6 class="font-weight-bold">Teknisi</h6>
    <p>Bertanggung jawab pemasangan satlit untuk media penyiaran, oprator Telekomunikasi</p>
    <span>Periode :</span>
    <input type="text" value="Menolak Tawaran" disabled class="mb-3">
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 border offer-biodata">
    <img src="{{url('frontend/libraries/img/kualifikasi/himti.png')}}" width="90px" height="60px" class="pt-2">
    <h5 class="pt-2 font-weight-bold">HIMTI</h5>
    <h6 class="font-weight-bold">Anggota [Devisi Agama]</h6>
    <p class="pb-3">Himpunan Mahasiswa Teknik Informatika Universitas Muhammadiyah Tangerang.</p>
    <span>Periode :</span>
    <input type="text" value="Sebagai Mahasiswa" disabled class="mb-3">
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 border offer-biodata">
    <img src="{{url('frontend/libraries/img/kualifikasi/dk.png')}}" width="90px" height="40px" class="pt-2">
    <h5 class="pt-3 font-weight-bold">Team Startup</h5>
    <h6 class="font-weight-bold">UX/UI & Front-End Developer</h6>
    <p>Deka.com adalah startup kecil atau dibilang sederhana yang menyediakan tutorial web programming dan les kursus.</p>
    <span>Periode :</span>
    <input type="text" value="Mahasiswa Akhir" disabled class="mb-3">
  </div>
</div>
</div>  
</div>


<div class="section slider">
<div class="container">
<div class="row my-5">
  <div class="col text-center">
    <span>This Is</span>
    <h2 class="font-weight-bold" id="hereme">UX / UI</h2>
  </div>
</div>

<div class="row">
  <div class="col-8 col-sm-7 mt-3 col-md-5 col-lg-3 m-auto text-center py-5 shadow p-3 bg-white rounded">
    <svg width="5em"  viewBox="0 0 16 16" class="bi bi-grid-3x2-gap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zM1 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V9z"/>
    </svg>
    <br>
    <span>User Experience</span>
    <p class="mt-4">is a person's emotions and attitudes about using a particular the partical, experiential</p>
    <div class="btn btn-primary mt-4">Find Out More</div>
  </div>
  <div class="col-8 col-sm-7 mt-3 col-md-5 col-lg-3 m-auto text-center py-5 shadow p-3 bg-white rounded">
    <svg width="5em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
      <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
    </svg>
    <br>
    <span>User Interface </span>
    <p class="mt-4">is the point at which human users intereact with a a computer, website appliaction </p>
    <div class="btn btn-primary mt-4">Find Out More</div>
  </div>
  <div class="col-8 col-sm-7 mt-3 col-md-5 col-lg-3 m-auto text-center py-5 shadow p-3 bg-white rounded">
    <svg width="5em"  viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
      <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
    </svg><br>
    <span>Prototype</span>
    <p class="mt-4">A prototype is an early sample, model, or realease of a product built to test a concept or process. </p>
    <div class="btn btn-primary mt-4">Find Out More</div>
  </div>
</div>
</div>
</div>


<!-- awal gallery -->

<div class="gallery mb-5 mt-5">
<div class="container">
    <div class="row" id="gallery">
        <div class="col text-center mt-4">
          <span>This is</span>
            <h3 class="font-weight-bold mb-5">Gallery</h3>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8 col-md-5 col-lg-3">
            <img src="{{url('frontend/libraries/img/portfolio/gallery/1.png')}}">
            <img class="pt-lg-3 pt-md-3 pt-sm-3" src="{{url('frontend/libraries/img/portfolio/gallery/2.png')}}">
        </div>
        <div class="col-8 col-md-5 col-lg-3">
            <img src="{{url('frontend/libraries/img/portfolio/gallery/3.png')}}">
        </div>
        <div class="col-8 col-md-5 col-lg-3">
            <img class="pt-md-2 pt-sm-2" src="{{url('frontend/libraries/img/portfolio/gallery/4.png')}}">
            <img class="pt-lg-3 pt-md-2 pt-sm-3" src="{{url('frontend/libraries/img/portfolio/gallery/5.png')}}">
        </div>
        <div class="col-8 col-md-5 col-lg-3">
            <img class="pt-md-2 pt-sm-2" src="{{url('frontend/libraries/img/portfolio/gallery/6.png')}}">
        </div>
        <div class="col-8 col-md-5 col-lg-3 pt-2">
          <img src="{{url('frontend/libraries/img/portfolio/gallery/7.png')}}">
          <img class="pt-lg-3 pt-md-3 pt-sm-3" src="{{url('frontend/libraries/img/portfolio/gallery/8.png')}}">
      </div>
        <div class="col-8 col-md-5 col-lg-3 pt-2">
            <img src="{{url('frontend/libraries/img/portfolio/gallery/9.png')}}">
        </div>
        <div class="col-8 col-md-5 col-lg-3 pt-2">
            <img src="{{url('frontend/libraries/img/portfolio/gallery/10.png')}}">
            <img class="pt-lg-3 pt-md-3 pt-sm-3" src="{{url('frontend/libraries/img/portfolio/gallery/11.png')}}">
        </div>
        <div class="col-8 col-md-5 col-lg-3 pt-2">
            <img src="{{url('frontend/libraries/img/portfolio/gallery/12.png')}}">
        </div>
    </div>

    <div class="row">
        
    </div>

        <div class="row">
            <div class="col text-center pt-3">
                <a href="">View All Pictures</a>
            </div>
        </div>
    </div>
</div>

<!-- akhir gallery -->

@endsection