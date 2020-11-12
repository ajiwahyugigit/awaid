@extends('layouts.app')

@section('title')
    awaid
@endsection

@section('content')
    <!-- awal carousel -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="container">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-8 col-sm-9 col-md-5 col-lg-4 offset-1">
                            <h1>AWA</h1>
                            <span>learn the basics of programming languages</span>
                            <p>make your dreams come true as web programming</p>
                            <button class="btn btn-warning" style="font-weight: 700; color: rgb(255, 255, 255);">I want
                                to
                                study</button>
                        </div>
                        <div class="col-4 d-none col-sm-3 col-lg-4 d-md-block offset-1">
                        <img src="{{url('frontend/img/ilurtaion undraw.co/5.png')}}" height="200px">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-8 col-sm-9 col-md-5 col-lg-4 offset-1">
                            <h1>AWA</h1>
                            <span>learn the basics of programming languages</span>
                            <p>make your dreams come true as web programming</p>
                            <button class="btn btn-warning" style="font-weight: 700; color: whitesmoke;">I want to
                                study</button>
                        </div>
                        <div class="col-4 d-none col-sm-3 col-lg-4 d-md-block offset-1">
                            <img src="img/ilurtaion undraw.co/5.png" height="200px">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-8 col-sm-9 col-md-5 col-lg-4 offset-1">
                            <h1>AWA</h1>
                            <span>learn the basics of programming languages</span>
                            <p>make your dreams come true as web programming</p>
                            <button class="btn btn-warning" style="font-weight: 700; color: whitesmoke;">I want to
                                study</button>
                        </div>
                        <div class="col-4 d-none col-sm-3 col-lg-4 d-md-block offset-1">
                        <img src="{{url('frontend/img/ilurtaion undraw.co/5.png')}}" height="200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- akhir carousel -->

    <!-- awal tutorial -->

    <div class="tutorial" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row pt-3 text-center text-uppercase">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3" style="color: #007bff; padding: 50px 50px;">
                    <a href="sub_html.html">html</a>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3" style="color: #007bff; padding: 50px 50px;">
                    <a href="">css</a>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3" style="color: #007bff; padding: 50px 50px;">
                    <a href="">javascript</a>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3" style="color: #007bff; padding: 50px 50px;">
                    <a href="">php</a>
                </div>
            </div>
        </div>
    </div>

    <!-- akhir tutorial -->

    <!-- awal box-tutorial -->

    <section class="">
        <div class="container">
            <div class="row mt-4">
                <div class="col-8 col-sm-10 col-md-6 col-lg-4 mt-3" style="margin: auto">
                    <div class="card text-center" style="width: 18rem;">
                    <img src="{{url('frontend/img/designer.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Web Designer</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-sm-10 col-md-6 col-lg-4 mt-3" style="margin: auto">
                    <div class="card text-center" style="width: 18rem;">
                    <img src="{{url('frontend/img/dev.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Fullstack Developer</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-sm-10 col-md-6 col-lg-4 mt-3" style="margin: auto">
                    <div class="card text-center" style="width: 18rem;">
                    <img src="{{url('frontend/img/deplo.png')}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Front End</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- akhir box-tutorial -->

    <!-- section programmer -->

    <section class="programmer mt-5" style="background-color: #F5F5FC">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <h2 style="margin-bottom: 20px; font-family:'Script MT', 'sans-serif'">What is Coding</h2>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                        voluptates libero non distinctio. Quaerat assumenda at quia consequatur illo vitae, cum odio,
                        delectus, autem alias perferendis error deserunt! Tenetur, laboriosam! Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Reiciendis quam debitis soluta? Aliquam voluptatibus itaque
                        omnis eveniet ducimus consequuntur enim consequatur ratione explicabo dolorum! Nobis magnam
                        reprehenderit maiores distinctio id. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </p>
                </div>
                <div class="col-9 col-sm-6 col-md-5 offset-md-1 col-lg-4 offset-lg-1">
                    <h2 style="margin-bottom: 20px; font-family:'Script MT', 'sans-serif'">Pakar Coding</h2>
                    <div class="row pt-4">
                        <div class="col-3">
                        <img src="{{url('frontend/img/prof.png')}}">
                        </div>
                        <div class="col-9">
                            <h5>Prof Yandra Arkeman</h5>
                            <p style="font-size: 12px; text-align: justify;">"Dengan coding, kita bisa menjadi tuan
                                dari mesin-mesin
                                cerdas
                                yang akan hadir dimasa depan"</p>

                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-3">
                        <img src="{{url('frontend/img/fb.png')}}">
                        </div>
                        <div class="col-9">
                            <h5>Mark Zuckerberg</h5>
                            <p style="font-size: 12px; text-align: justify;">"Saya ingin
                                membantu situs ini
                                berekspansi," kata Moskovitz. Zuck kala itu sempat meragukan Moskovitz."</p>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-3">
                        <img src="{{url('frontend/img/ma.png')}}">
                        </div>
                        <div class="col-9">
                            <h5>Nadiem Makarim</h5>
                            <p style="font-size: 12px; text-align: justify;">"Sudah pasti peran teknologi akan ada di
                                situ, dalam bentuk
                                apanya kita belum pasti. Yang terpenting kita ini mulai bukan dengan aksi, tapi belajar
                                dulu, dengan semua stakeholder yang ada"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section programmer -->

    <!--Awal Contact -->


    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col text-center pt-4">
                    <h3 style="font-family:'Script MT', 'sans-serif'">Contact</h3>
                    <hr style="width: 130px; margin-top: -3px;">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-sm-8 col-lg-5">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="email" class="form-control" placeholder="Masukan nama" id="nama"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" placeholder="Masukan E-mail" id="email">
                        </div>
                        <div class="form-group">
                            <label for="hp">No-Telpon</label>
                            <input type="text" class="form-control" placeholder="Masukan E-mail" id="hp">
                        </div>
                        <div class="kota-asal">
                            <label for="kotaasal">Kota Asal</label>
                            <select class="form-control">
                                <option>---Select---</option>
                                <option>Tangerang</option>
                                <option>Jakarta</option>
                                <option>Bandung</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- akhir Contact -->
@endsection