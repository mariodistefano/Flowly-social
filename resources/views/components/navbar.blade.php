<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @guest
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
          </li>
          @else
          <p>Benvenuto {{Auth::user()->name}}</p>
          <li class="nav-item"><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('#form-logout').submit();">Logout</a></li>
          <form  id="form-logout" class="d-none" method="POST" action="{{route('logout')}}">@csrf</form>
        @endguest
        </ul>
      </div>
    </div>
  </nav>

