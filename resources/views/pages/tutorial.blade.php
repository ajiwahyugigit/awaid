@extends('layouts.app')

@section('title')
    tutorial
@endsection

@section('content')
    
<!-- awal header -->

<div class="header">
    <div class="container">
      <div class="row">
        <div class="col-10 col-sm-12 col-md-12 col-lg-5 my-5">
          <p>belajarkoding.awaid</p>

          <h1>
            <b>
                Tutorial
            </b>
            belajarkoding.awaid
          </h1>
          <button type="button" class="btn btn-header">Let's Get Started</button>
        </div>
        <div class="col-6 d-none d-lg-block">
          <img src="{{url('frontend/libraries/img/header_theory.png')}}">
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

<!-- awal theory -->

  <section class="theory my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                          <li class="breadcrumb-item" aria-current="page">Tutorial</li>
                          <li class="breadcrumb-item" aria-current="page">Html</li>
                        </ol>
                      </nav>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                  <div class="card border-0 ml-3">
                    <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                    <div class="card-body pl-4">
                      <h5 class="mb-3">Belajar HTML dari 0</h5>
                      <span>HTML</span>
                      <div class="row mt-4 mb-2">
                        <div class="col">
                          <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                            <i class="fa fa-user-alt"></i> Aji Wahyugi
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                            <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                          </a>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col">
                          <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                  <div class="card border-0 ml-3">
                    <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                    <div class="card-body pl-4">
                      <h5 class="mb-3">Belajar HTML dari 0</h5>
                      <span>HTML</span>
                      <div class="row mt-4 mb-2">
                        <div class="col">
                          <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                            <i class="fa fa-user-alt"></i> Aji Wahyugi
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                            <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                          </a>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col">
                          <a href="#" class="btn btn-primary" ><i class="fa fa-eye"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                  <div class="card border-0 ml-3">
                    <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                    <div class="card-body pl-4">
                      <h5 class="mb-3">Belajar HTML dari 0</h5>
                      <span>HTML</span>
                      <div class="row mt-4 mb-2">
                        <div class="col">
                          <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                            <i class="fa fa-user-alt"></i> Aji Wahyugi
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                            <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                          </a>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col">
                          <a href="#" class="btn btn-primary" ><i class="fa fa-eye"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                    <div class="card border-0 ml-3">
                      <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                      <div class="card-body pl-4">
                        <h5 class="mb-3">Belajar HTML dari 0</h5>
                        <span>HTML</span>
                        <div class="row mt-4 mb-2">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-user-alt"></i> Aji Wahyugi
                            </a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                            </a>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col">
                            <a href="#" class="btn btn-download">
                              Download
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                    <div class="card border-0 ml-3">
                      <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                      <div class="card-body pl-4">
                        <h5 class="mb-3">Belajar HTML dari 0</h5>
                        <span>HTML</span>
                        <div class="row mt-4 mb-2">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-user-alt"></i> Aji Wahyugi
                            </a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                            </a>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col">
                            <a href="#" class="btn btn-download">
                              Download
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                    <div class="card border-0 ml-3">
                      <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                      <div class="card-body pl-4">
                        <h5 class="mb-3">Belajar HTML dari 0</h5>
                        <span>HTML</span>
                        <div class="row mt-4 mb-2">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-user-alt"></i> Aji Wahyugi
                            </a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                            </a>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col">
                            <a href="#" class="btn btn-download">
                              Download
                              <i class="fa fa-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                    <div class="card border-0 ml-3">
                      <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                      <div class="card-body pl-4">
                        <h5 class="mb-3">Belajar HTML dari 0</h5>
                        <span>HTML</span>
                        <div class="row mt-4 mb-2">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-user-alt"></i> Aji Wahyugi
                            </a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                            </a>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col">
                            <a href="#" class="btn btn-score">
                              Score
                              <i class="fa fa-user-graduate"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                    <div class="card border-0 ml-3">
                      <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                      <div class="card-body pl-4">
                        <h5 class="mb-3">Belajar HTML dari 0</h5>
                        <span>HTML</span>
                        <div class="row mt-4 mb-2">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-user-alt"></i> Aji Wahyugi
                            </a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                            </a>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col">
                            <a href="#" class="btn btn-score">
                              Score
                              <i class="fa fa-user-graduate"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-10 mt-4 col-md-6 col-lg-4 ">
                    <div class="card border-0 ml-3">
                      <img src="{{url('frontend/libraries/img/theory_html.png')}}">
                      <div class="card-body pl-4">
                        <h5 class="mb-3">Belajar HTML dari 0</h5>
                        <span>HTML</span>
                        <div class="row mt-4 mb-2">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-user-alt"></i> Aji Wahyugi
                            </a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <a href="#" style="text-decoration: none; color: rgb(187, 187, 187);">
                              <i class="fa fa-clock"></i> Jum'at, 2020-10-01
                            </a>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col">
                            <a href="#" class="btn btn-score">
                              Score
                              <i class="fa fa-user-graduate"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
            </div>
        </div>
  </section>

<!-- akhir theorry -->

@endsection