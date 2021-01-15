@extends('layouts.admin')

@section('content')

    

     <!-- Begin Page Content -->
     <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi</li>
                <li class="breadcrumb-item active" aria-current="page">CSS</li>
            </ol>
        </nav>
        
         <!-- DataTales Example -->
         <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-sucbtn-success">Casscading Style</h6>
          </div>
          <div class="card-body">        
            <div class="container">
              <a href="{{route('csscreate')}}" class="btn btn-primary mb-3">
                Post<i class="fa fa-plus-circle pl-2"></i>
              </a>
              <div class="row">
                @forelse ($css as $html)
                <div class="col mt-4">
                  <div class="card" style="width: 18rem; box-shadow: -3px 2px 9px rgb(199, 199, 199);">

                    <img class="card-img-top p-1" src="/img/{{$html->foto == '' ? 'default.png' : $html->foto}}">
                    <div class="card-body">
                      <h5 class="card-title" style="font-family: Ubuntu Mono;">{{$html->judul}}</h5>
                      <span style="background-color: rgb(0, 185, 25); padding: 5px; color: rgb(255, 255, 255); border-radius: 4px;">{{$html->sub_judul}}</span><br>

                      <div class="icon mt-2 mb-2">
                        <span style="font-family: Assistant; font-size: 12px;">
                          <i class="fas fa-user-circle"></i>
                          {{$html->aktor}}</span><br>
  
                        <p class="card-text" style="font-family: Assistant; font-size: 12px;">
                          <i class="fas fa-clock"></i>
                          {{$html->hari}}, {{$html->tanggal}}</p>
                      </div>

                        <a href="{{route('cssedit', $html->id)}}" class="btn btn-success">
                          <i class="fa fa-edit"></i>
                      </a>
                        
                         <form action="{{route('cssdestroy', $html->id)}}" method="post" class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                              </button>
                          </form>

                    </div>
                  </div>
                </div>
                @empty
                <div class="alert alert-danger" role="alert">
                  Silahkan Post Content!
                </div>
              @endforelse
              </div>
            </div>
            
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

@endsection