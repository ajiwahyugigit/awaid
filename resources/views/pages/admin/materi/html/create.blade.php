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
            <h6 class="m-0 font-weight-bold text-sucbtn-success">Hypertext Markup Languages</h6>
          </div>
          <div class="card-body">
            <form action="{{route('htmlstore')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="foto">Gambar</label>
                <input type="file" class="form-control" name="foto" id="foto" accept=".jpeg,.png,.jpg"/>
                <div class="form-group">
                  <label for="hari">Hari</label>
                  <select class="form-control" name="hari" id="hari">
                      <option>Pilih Hari</option>
                      <option>SENIN</option>
                      <option>SELASA</option>
                      <option>RABU</option>
                      <option>KAMIS</option>
                      <option>JUM AT</option>
                      <option>SABTU</option>
                      <option>MINGGU</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="datetime-local" class="form-control" name="tanggal" id="tanggal" placeholder="Masukan Tanggal"/>
                </div>
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul"/>
                </div>
                <div class="form-group">
                  <label for="sub_judul">Sub Judul</label>
                  <input type="text" class="form-control" name="sub_judul" id="sub_judul" placeholder="Masukan Sub Judul" />
                </div>
                <div class="form-group">
                  <label for="aktor">aktor</label>
                  <input type="text" class="form-control" name="aktor" id="aktor" placeholder="Masukan Aktor"/>
                </div>
                <div class="form-group">
                  <label for="isi_content">Isi Content</label>
                  <textarea name="isi_content" rows="6" class="d-block w-100 form-control" placeholder="Masukan Isi Content"></textarea>
                </div>
            </form>
            <button class="btn btn-primary btn-block" type="submit">Post</button>
          </div>
        </div>
      </div>

      </div>
      <!-- /.container-fluid -->

@endsection