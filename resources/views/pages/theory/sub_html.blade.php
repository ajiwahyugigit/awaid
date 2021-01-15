@extends('layouts.app')

@section('title')
    Sub HTML
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
                Sub
              </b>
               Hypertext Markuq Langueage
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
          <div class="card active-card">
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

  <section class="Subhtml my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                          <li class="breadcrumb-item" aria-current="page">Theory</li>
                          <li class="breadcrumb-item" aria-current="page"><a href="/theory_html">Html</a></li>
                          <li class="breadcrumb-item" aria-current="page">Sub Html</li>
                        </ol>
                      </nav>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-8">
                  <div class="card border-0">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-2">
                          <img src="{{url('frontend/libraries/img/sub_html.png')}}">
                        </div>
                        <div class="col mt-3">
                          <h3>Belajar Html dari 0</h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, cupiditate.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <span>HTML</span>
                      <p class="mt-3" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa quae voluptate cumque assumenda explicabo, itaque perspiciatis dolore optio exercitationem veniam tenetur delectus dolor incidunt, laboriosam ipsam aspernatur nisi expedita! Fugiat commodi eum asperiores ab. Sint facere nihil rerum molestiae, vero ipsa qui. 
                        <br>
                      Tempore suscipit cupiditate, debitis quo odio ipsum velit alias nulla minus voluptates doloribus aperiam, magni ut facere adipisci delectus consectetur sunt iste vel molestias cumque expedita qui. Soluta laudantium voluptatum molestias nobis officia incidunt sint ullam expedita est at ducimus quasi vitae atque, vel ex dolore, optio blanditiis! Sapiente laborum iusto non doloribus adipisci velit dolorum soluta expedita?
                        <br>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, odio! Commodi, labore dolor velit, placeat sint, in amet aliquid pariatur harum adipisci aperiam cumque? Deserunt quasi sed fugit, possimus eaque dolor cumque veritatis, repudiandae itaque, aut at vero! Alias repellat culpa sapiente quaerat quidem quo qui voluptate ea dignissimos exercitationem.
                    </p>
                    <div class="row icon">
                      <div class="col-2">
                        <i class="fa fa-user"></i>
                        Aji Wahyugi
                      </div>
                      <div class="col-4">
                        <i class="fa fa-clock"></i>
                        Rabu 16 Desember 2020
                      </div>
                      <div class="col offset-4">
                        <a href="#">
                          <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-twitter-square"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-instagram-square"></i>
                        </a>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-4 mt-3">
                          <h4>MENTOR</h4>
                        </div>
                        <div class="col">
                          <img src="{{url('frontend/libraries/img/mentor.png')}}">
                        </div>
                      </div>
                    </div>
                    <div class="card-body mentor">
                      <div class="row ">
                        <div class="col-3">
                          <img src="{{url('frontend/libraries/img/aji.png')}}">
                        </div>
                        <div class="col mt-3">
                          <h5>AJI WAHYUGI</h5>
                          <pre>UX\UI FrontEnd Developer</pre>
                          <hr>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate saepe, tenetur odio magnam aliquid fugit explicabo placeat quam obcaecati soluta assumenda maxime quidem. Facilis dolorem eius, provident laboriosam repellat repudiandae iste harum earum unde quas vero dignissimos nobis, recusandae distinctio quidem repellendus blanditiis ea, fugit magnam? Quae laudantium quos exercitationem?</p>
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