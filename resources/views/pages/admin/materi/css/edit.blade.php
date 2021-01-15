@extends('layouts.admin')

@section('content')

    

     <!-- Begin Page Content -->
     <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('css')}}">CSS </a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        
        @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
    @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-sucbtn-success">Hypertext Markup Languages {{$css->judul}}</h6>
          </div>
          <div class="card-body">
            {{-- <form action="{{route('htmlupdate', $html->id)}}" method="PUT" enctype="multipart/form-data"> --}}
            <form action="/admin/css/update/{{$css->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
              <div class="form-group">

                <label for="foto">Gambar</label>
                <input type="file" class="form-control" name="foto" id="foto" value="$css->foto" accept=".jpeg,.png,.jpg"/>

                <div class="form-group">
                  <label for="hari">Hari</label>
                  <select class="form-control" name="hari" id="hari">
                      <option>Pilih Hari</option>
                      <option {{$css->hari=='SENIN' ? 'selected' : ''}}>SENIN</option>
                      <option {{$css->hari=='SELASA' ? 'selected' : ''}}>SELASA</option>
                      <option {{$css->hari=='RABU' ? 'selected' : ''}}>RABU</option>
                      <option {{$css->hari=='KAMIS' ? 'selected' : ''}}>KAMIS</option>
                      <option {{$css->hari=='JUMAT' ? 'selected' : ''}}>JUMAT</option>
                      <option {{$css->hari=='SABTU' ? 'selected' : ''}}>SABTU</option>
                      <option {{$css->hari=='MINGGU' ? 'selected' : ''}}>MINGGU</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{$css->tanggal}}" placeholder="Masukan Tanggal"/>
                </div>
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" value="{{$css->judul}}" placeholder="Masukan Judul"/>
                </div>
                <div class="form-group">
                  <label for="sub_judul">Sub Judul</label>
                  <input type="text" class="form-control" name="sub_judul" id="sub_judul" value="{{$css->sub_judul}}"/>
                </div>
                <div class="form-group">
                  <label for="aktor">aktor</label>
                <input type="text" class="form-control" name="aktor" id="aktor" value="{{$css->aktor}}" placeholder="Masukan Aktor"/>
                </div>
                <div class="form-group">
                  <label for="isi_content">Isi Content</label>
                  <textarea name="isi_content" rows="6" class="d-block w-100 form-control">{{$css->isi_content}}</textarea>
                </div>
            </form>
            <button class="btn btn-primary btn-block" type="submit">Post</button>
          </div>
        </div>
      </div>

      </div>
      <!-- /.container-fluid -->

@endsection