 <!--=============== NAV ===============-->
 <div class="nav" id="nav" id="nav-index">
  <nav class="nav__content">
      <div class="nav__toggle" id="nav-toggle">
          <i class='bx bx-chevron-right' ></i>
      </div>

      <a href="{{route('homepage')}}" class="nav__logo">
        <i class="fa-solid fa-house"></i>
          <span class="nav__logo-name"> The FooL</span>
      </a>

      <div class="nav__list">

        
          <a class="nav__link" id="navlente">
            <i id="none-lente"class="fa-solid fa-magnifying-glass"></i>
            <form class="d-flex " method="GET" action="{{route('article.search')}}">
              <input id="none-scritta" type="search" class=" form-control me-2 dropdown-item none-scritta border border-secondary" name="query" placeholder="search" aria-label="Search">
            </form>
            </a>
           {{-- <span class="nav__name">Search</span> --}}
          


        {{-- <a href="" class="btn btn-secondary dropdown-toggle nav__link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-earth-europe"></i>
          <div class="dropdown nav__link">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </a> --}}





        <a href="{{route('article.index')}}" class="nav__link">
          <i class="fa-solid fa-earth-europe"></i>
          <span class="nav__name">The Facts</span>
        </a>

        <a href="{{route('careers')}}" class="nav__link">
          <i class="fa-regular fa-handshake"></i>
          <span class="nav__name">Join us</span>
        </a>

        @auth
          @if (Auth::user()->is_admin)
            <a href="{{route('admin.dashboard')}}" class="nav__link">
              <i class="fa-regular fa-folder-open"></i>
              <span class="nav__name">Dashboard Admin</span>
            </a>    
          @endif
          @if (Auth::user()->is_revisor)
            <a href="{{route('revisor.dashboard')}}" class="nav__link">  {{--active-link--}}
              <i class='bx bx-grid-alt'></i>
              <span class="nav__name">Dashboard Revisor</span>
            </a>    
          @endif
          @if (Auth::user()->is_writer)
          <a href="{{route('writer.dashboard')}}" class="nav__link">  {{--active-link--}}
            <i class='bx bx-grid-alt'></i>
            <span class="nav__name">Dashboard Author</span>
          </a>    
          @endif
        @endauth
        
        @guest
          <a href="{{route('register')}}" class="nav__link">
            <i class="fa-regular fa-address-card"></i>
              <span class="nav__name">Registration</span>
          </a>
          <a href="{{route('login')}}" class="nav__link">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span class="nav__name">Sign in</span>
          </a>

        @else
          <a href="{{route('homepage')}}" class="nav__link">
            <i class="fa-regular fa-user"></i>
            <span class="nav__name">What's up <b>{{Auth::user()->name}}</b> ?</span>
          </a>    

          <a href="{{route('article.create')}}" class="nav__link">
            <i class="fa-regular fa-pen-to-square"></i>
              <span class="nav__name">Create Article</span>
          </a>

          <form method="POST" id="form-logout" action="{{route('logout')}}" class="d-none"> @csrf</form>

          <a href="#" class="nav__link" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="nav__name">Logout</span>
          </a>
            
        @endguest
      </div>
  </nav>
</div>

 <!--=============== MAIN ===============-->
 {{-- <main class="container section">
  <h1>Components</h1>
</main> --}}