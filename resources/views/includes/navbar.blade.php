<!-- awak navbar -->

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#" style="font-weight: 700;">
            <img src="frontend/img/logo.png" width="60px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: blue;">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="is_coding.html">What is Coding</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tutorial.html">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.html">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
            
        @guest
        <!-- Mobile button -->
    <form class="form-inline d-sm-block d-md-none">
    <button type="button" class="btn btn-warning text-white py-2 px-3" data-toggle="modal" data-target="#login" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z" />
          <path fill-rule="evenodd"
            d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z" />
        </svg>
      </button>
    </form>
    <!-- Desktop Button -->
    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
    <button type="button" class="btn btn-warning text-white px-3 py-2" data-toggle="modal" data-target="#login" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z" />
          <path fill-rule="evenodd"
            d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z" />
        </svg>
      </button>
    </form>
    @endguest

    @auth
       <!-- Mobile button -->
    <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
      @csrf
      <button type="submit" class="btn btn-warning text-white">
          Keluar
        </button>
      </form>

      <!-- Desktop Button -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
        @csrf
      <button type="submit" class="btn btn-warning text-white">
          Keluar
        </button>
      </form>

    @endauth

        </div>
    </div>
</nav>

<!-- akhir navbar -->
