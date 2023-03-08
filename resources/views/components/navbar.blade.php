 <!--=============== NAV ===============-->
 <div class="nav" id="nav">
  <nav class="nav__content">
      <div class="nav__toggle" id="nav-toggle">
          <i class='bx bx-chevron-right' ></i>
      </div>

      <a href="{{route('homepage')}}" class="nav__logo">
          <i class='bx bxs-heart' ></i>
          <span class="nav__logo-name">Aulab Post</span>
      </a>

      <div class="nav__list">
        @auth
          @if (Auth::user()->is_admin)
            <a href="{{route('admin.dashboard')}}" class="nav__link active-link">
              <i class='bx bx-grid-alt'></i>
              <span class="nav__name">Dashboard Admin</span>
            </a>    
          @endif
          @if (Auth::user()->is_revisor)
            <a href="{{route('revisor.dashboard')}}" class="nav__link active-link">
              <i class='bx bx-grid-alt'></i>
              <span class="nav__name">Dashboard Revisor</span>
            </a>    
          @endif
        @endauth
        
        @guest
          <a href="{{route('register')}}" class="nav__link">
              <i class='bx bx-file'></i>
              <span class="nav__name">registrati</span>
          </a>
          <a href="{{route('login')}}" class="nav__link">
            <i class='bx bx-file'></i>
            <span class="nav__name">accedi</span>
          </a>

        @else
          <a href="" class="nav__link active-link">
            <i class='bx bx-grid-alt'></i>
            <span class="nav__name">Benvenuto {{Auth::user()->name}}</span>
          </a>    

          <a href="{{route('article.create')}}" class="nav__link">
              <i class='bx bx-envelope' ></i>
              <span class="nav__name">Crea Articolo</span>
          </a>

          <a href="{{route('article.index')}}" class="nav__link">
              <i class='bx bx-bar-chart-square' ></i>
              <span class="nav__name">Articoli</span>
          </a>

          <form method="POST" id="form-logout" action="{{route('logout')}}" class="d-none"> @csrf</form>

          <a href="#" class="nav__link" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
            <i class='bx bx-cog' ></i>
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