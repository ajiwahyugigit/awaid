@extends('layouts.admin')

@section('content')

    

     <!-- Begin Page Content -->
     <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('users')}}">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-sucbtn-success">Tambah Users</h6>
          </div>
          <div class="card-body">        
            <div class="table-responsive">
              <div class="form-group">
                <label for="foto">Foto Profile</label>
                <input type="file" class="form-control" name="foto" id="foto" accept=".jpeg,.png,.jpg"/>
            </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama"/>
            </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="name" placeholder="Masukan email"/>
            </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="name" placeholder="Masukan Password"/>
            </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                  <option>Pilih Status</option>
                  <option>Admin</option>
                  <option>User</option>
                </select>
            </div>
            <button class="btn btn-primary btn-block">Simpan</button>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

@endsection