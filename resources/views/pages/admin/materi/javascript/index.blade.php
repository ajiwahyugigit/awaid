@extends('layouts.admin')

@section('content')

    

     <!-- Begin Page Content -->
     <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi</li>
                <li class="breadcrumb-item active" aria-current="page">JS</li>
            </ol>
        </nav>
        
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-sucbtn-success">Casscading Style</h6>
          </div>
          <div class="card-body">
            <a href="{{route('jscreate')}}" class="btn btn-primary mb-3">
              Post<i class="fa fa-plus-circle pl-2"></i>
            </a>
            
            <div class="table-responsive">

              <img src="{{url('frontend/img/materi/JS.png')}}"><br>
              <span>Selasa,18/01/2020  02:00:00 Wib</span>
              <h4>Belajar Dasar JS dari 0</h4>
              <span class="bg-dark text-light px-2 py-1" style="font-size: 12px; border-radius: 5px">Javascript</span>
              <span class="bg-success text-light px-2 py-1" style="font-size: 12px; border-radius: 5px">Aji Wahyugi Asytar</span>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit ipsam saepe totam quaerat accusamus debitis laborum repellat corrupti nihil aliquam dolorem porro rerum, cupiditate eaque iste illo unde error facere ab id quos facilis doloribus inventore temporibus. Possimus temporibus asperiores molestias quod ex nihil, cumque obcaecati laudantium voluptate accusamus inventore nisi minus fuga nulla labore totam, dolores consequuntur? Dolorem corporis voluptatibus ullam maxime aut inventore, maiores nulla eius incidunt repellendus quasi dolore ex aspernatur laboriosam doloremque fugit. Ducimus dolore iure</p>
              <span>Share : </span>
              <a href="">
                <i class="fa fa-inbox"></i>
              </a>
              <a href="">
                <i class="fa fa-info-circle"></i>
              </a>
              <a href="">
                <i class="fa fa-image"></i>
              </a>
              <br><br>
              <button class="btn btn-primary">
                <i class="fas fa-pen"></i>
              </button>
              
              <button class="btn btn-danger">
                <i class="fa fa-trash"></i>
              </button>
            </div>
          </div>
        </div>


      </div>
      <!-- /.container-fluid -->

@endsection