@extends('layouts.admin')

@section('content')

    

     <!-- Begin Page Content -->
     <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi</li>
                <li class="breadcrumb-item active" aria-current="page">HTML</li>
            </ol>
        </nav>
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-sucbtn-success">Hypertext Markup Languages</h6>
          </div>
          <div class="card-body">
            <a href="{{route('htmlcreate')}}" class="btn btn-primary mb-3">
              Post<i class="fa fa-plus-circle pl-2"></i>
            </a>
            
            <div class="table-responsive">

              @forelse ($htmls as $html)

                  <img src="/img/{{$html->foto == '' ? 'default.png' : $html->foto}}" alt="" style="width: 160px">

                  <span>{{$html->hari}}, {{$html->tanggal}}</span>
                  <h4>{{$html->judul}}</h4>
                  <span class="bg-dark text-light px-2 py-1" style="font-size: 12px; border-radius: 5px">{{$html->sub_judul}}</span>
                  <span class="bg-success text-light px-2 py-1" style="font-size: 12px; border-radius: 5px">{{$html->aktor}}</span>
                  <p class="mt-2">{{$html->isi_content}}</p>

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

              @empty
                <div class="alert alert-danger" role="alert">
                  Silahkan Post Content!
                </div>
              @endforelse
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

@endsection