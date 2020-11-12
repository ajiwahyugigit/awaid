<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <img src="{{url('backend/img/logo.png')}}" width="45px">
      </div>
      <div class="sidebar-brand-text mx-3">awaid</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
      Sub users
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('users')}}" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-users"></i>
        <span>Users</span>
      </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Sub Menu
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-book"></i>
        <span>Materi</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Silahkan Pilih Materi :</h6>
          <a class="collapse-item" href="{{route('html')}}">HTML</a>
          <a class="collapse-item" href="{{route('css')}}">CSS</a>
          <a class="collapse-item" href="{{route('javascript')}}">JavaScript</a>
          <a class="collapse-item" href="{{route('php')}}">PHP</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-pen"></i>
        <span>Ujian</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Silahkan Pilih Ujian :</h6>
          <a class="collapse-item" href="#">HTML</a>
          <a class="collapse-item" href="#">CSS</a>
          <a class="collapse-item" href="#">JavaScript</a>
          <a class="collapse-item" href="#">PHP</a>
        </div>
      </div>
    </li>
    

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
        <i class="fas fa-clipboard-list"></i>
        <span>Nilai</span>
      </a>
      <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Silahkan Pilih Nilai :</h6>
          <a class="collapse-item" href="#">HTML</a>
          <a class="collapse-item" href="#">CSS</a>
          <a class="collapse-item" href="#">JavaScript</a>
          <a class="collapse-item" href="#">PHP</a>
        </div>
      </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Sub Opsi
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-print"></i>
        <span>Report</span></a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-sign-in-alt"></i>
        <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->