@extends('layouts.app')

@section('title')
    belajarkoding.awaid
@endsection

@section('content')
  

<!-- akhir navbar -->

<!-- awal header -->

<div class="header">
    <div class="container">
      <div class="row">
        <div class="col-10 col-sm-12 col-md-12 col-lg-5 my-5">
          <p>belajarkoding.awaid</p>
          <h1> <b>
            Learn
          </b>
             anything,<br>
              anytime, <br>
              anyware
          </h1>
          <button type="button" class="btn btn-header">Get Started</button>
        </div>
        <div class="col-6 d-none d-lg-block">
          <img src="{{url('frontend/libraries/img/header.png')}}">
        </div>
      </div>
    </div>
  </div>
  
  <!-- akhir header -->
  <!-- awal materi -->
  
  <div class="materi">
    <div class="container">
      <div class="row justify-content-center my-3">
        <div class="col-8 mt-4 col-md-6 col-lg-3 m-lg-0 text-center">
          <div class="card">
            <div class="card-body">
              <img src="{{url('frontend/libraries/img/materi_html.png')}}">
              <h5 class="pt-2">HTML</h5>
              <p>Hypertext Markuq Language</p>
            </div>
          </div>
        </div>
        <div class="col-8 mt-4 col-md-6 col-lg-3 m-lg-0 text-center">
          <div class="card">
            <div class="card-body">
              <img src="{{url('frontend/libraries/img/materi_css.png')}}">
              <h5 class="pt-2">CSS</h5>
              <p>casscading Style</p>
            </div>
          </div>
        </div>
        <div class="col-8 mt-4 col-md-6 col-lg-3 m-lg-0 text-center">
          <div class="card">
            <div class="card-body">
              <img src="{{url('frontend/libraries/img/materi_js.png')}}">
              <h5 class="pt-2">JS</h5>
              <p>Javascipt</p>
            </div>
          </div>
        </div>
        <div class="col-8 mt-4 col-md-6 col-lg-3 m-lg-0 text-center">
          <div class="card">
            <div class="card-body">
              <img src="{{url('frontend/libraries/img/materi_php.png')}}">
              <h5 class="pt-2">php</h5>
              <p>Preprocesor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- akhir materi -->
  
  <!-- awal konsep -->
  
  <div class="konsep">
    <div class="container">
      <div class="row my-3">
        <div class="col concept">
          <h5>Concept</h5>
        </div>
        <div class="col text-end">
          <h5><a href="#">Views</a></h5>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-9 col-md-7 col-lg-4">
          <a href="#">
            <img src="{{url('frontend/libraries/img/theory.png')}}">
          </a>
        </div>
        <div class="col-9 col-md-7 col-lg-4">
          <a href="#">
            <img src="{{url('frontend/libraries/img/questios.png')}}">
          </a>
        </div>
        <div class="col-9 col-md-7 col-lg-4">
          <a href="#">
            <img src="{{url('frontend/libraries/img/score.png')}}">
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ahir konsep -->
  
  
  <!-- awal developer -->
  
  <div class="developer">
    <div class="container">
      <div class="row my-3">
        <div class="col">
          <h5>Ongoing Course</h5>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-8 col-md-10 col-lg-6">
          <div class="card border-0">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <img src="{{url('frontend/libraries/img/ux.png')}}">
              </div>
              <div class="col-md-5 col-lg-6">
                <div class="card-body mt-md-4">
                  <h4 class="card-title">UX \ UI design with <br> belajarkoding.awaid</h4>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-8 col-md-10 col-lg-6">
          <div class="card border-0">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <img src="{{url('frontend/libraries/img/ux.png')}}">
              </div>
              <div class="col-md-5 col-lg-6">
                <div class="card-body mt-md-4">
                  <h4 class="card-title">Front-End design with <br> belajarkoding.awaid</h4>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-8 col-md-10 col-lg-6 mt-3">
          <div class="card border-0">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <img src="{{url('frontend/libraries/img/analys.png')}}">
              </div>
              <div class="col-md-5 col-lg-6">
                <div class="card-body mt-md-4">
                  <h4 class="card-title">Back-End design with <br> belajarkoding.awaid</h4>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-8 col-md-10 col-lg-6 mt-3">
          <div class="card border-0">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <img src="{{url('frontend/libraries/img/analys.png')}}">
              </div>
              <div class="col-md-5 col-lg-6">
                <div class="card-body mt-md-4">
                  <h4 class="card-title">Analyst design with <br> belajarkoding.awaid</h4>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- akhir developer -->
  

@endsection