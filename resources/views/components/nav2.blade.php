<nav id="navbar" class="navbar-expand-lgMIA d-none d-md-block">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
    </button>
      <div class="h-100">
        <div class="row h-100 align-items-around" class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="col-12">
            <ul class="h-100 navbar-nav flex-column justify-content-around">
              {{-- sezione libero accesso --}}
                <li >
                  <button class="btnLogo"><h2 class="text-center"><a href="{{route('homepage')}}">Aulab Post</a></h2></button>
                </li>
  
                <li>
                  <button class="  ms-2 button"  >
                    <a href="{{route('careers')}}">Lavora con Noi</a>
                  </button>
                </li>
  
                <li> 
                  <button class="mb-5  ms-2 button">
                    <a href="{{route('article.index')}}">Articoli</a>
                  </button>
               </li>
  
  
               {{-- sezione dashboard admin e revisor --}}
               @auth
                  <li> 
                    @if(Auth::user()->is_admin)
                        <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
                    @endif
                  </li>
  
                  <li> 
                    @if(Auth::user()->is_revisor)
                        <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisore</a></li>
                    @endif
                  </li>
               @endauth
      
              @guest
  
                {{-- LOGIN --}}
                <li> 
                  <button class="  ms-2 button " >
                    <a href="{{route('register')}}">Registrati</a>
                  </button>
                </li>
                <li> 
                  <button class="  ms-2 button " >
                    <a href="{{route('login')}}">Accedi</a>
                  </button>
                </li>
                @else
  
                <li> 
                  <button class="  ms-2 button"  >
                    <a class="nav-link" href="#" role="button">
                      Benvenuto {{Auth::user()->name}}
                    </a>
                  </button>
                </li>
  
                <form method="POST" id="form-logout" action="{{route('logout')}}" class="d-none"> @csrf</form>
  
            
                <li> 
                    <button class="  ms-2 button">
                      <a href="{{route('article.create')}}">Crea Articolo</a>
                    </button>
                </li>
  
                <li>
                    <button class="m-5 text-start ms-2 button"  >
                      <li><a class="" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                      </li>
                    </button>
                </li>
  
              @endguest
           
            </ul>
          </div>
        </div>
      </div>
  </nav>
  
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title" id="offcanvasLabel"><a href="{{route('homepage')}}">Aulab Post</a></h2>
      
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body flex-column justify-content-center h-100">
  
      <li>
        <button class="col-12 button mt-3">
          <a href="{{route('careers')}}">Lavora con Noi</a>
        </button>
      </li>
  
      @auth
        <li> 
          @if(Auth::user()->is_admin)
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
          @endif
        </li>
      @endauth
    
      @guest
  
      {{-- LOGIN --}}
      <li> 
        <button class="  ms-2 button " >
          <a href="{{route('register')}}">Registrati</a>
        </button>
      </li>
      <li> 
        <button class="  ms-2 button " >
          <a href="{{route('login')}}">Accedi</a>
        </button>
      </li>
  
      @else
  
      <li> 
        <button class="  ms-2 button"  >
          <a class="nav-link" href="#" role="button">
            Benvenuto {{Auth::user()->name}}
          </a>
        </button>
      </li>
  
      <form method="POST" id="form-logout" action="{{route('logout')}}" class="d-none"> @csrf</form>
  
       
  
        <button class="col-12 button mt-3">
          <a href="{{route('article.create')}}">Crea Articolo</a>
        </button>
        <button class="col-12 button mt-3">
          <a href="{{route('article.index')}}">Articoli</a>
        </button>
      <div>
        <button class="m-5 text-start w-100  ms-2 button"  >
          <li><a class="" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
          </li>
        </button>
      </div>
  
      @endguest
  
  
  
    </div>  
  </div>
  
  <a class="m-5 d-md-none" data-bs-toggle="offcanvas" href="#offcanvasExample"  aria-controls="offcanvasExample">
    <span class="navbar-toggler-icon">   <label for="burger" class="burger mt-5">
        <input id="burger" type="checkbox">
        <span></span>
        <span></span>
        <span></span>
      </label></span>
  </a>