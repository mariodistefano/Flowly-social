<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-around">
            @auth
                @if (Auth::user()->is_admin)
                    <a href="{{route('admin.dashboard')}}" class="nav__link ">
                        <i class="fa-regular fa-folder-open"></i>
                        <span class="nav__name ms-1 me-2">Dashboard Admin</span>
                    </a>    
                @endif
                @if (Auth::user()->is_revisor)
                    <a href="{{route('revisor.dashboard')}}" class="nav__link ">
                        <i class='bx bx-grid-alt'></i>
                        <span class="nav__name ms-1 me-2 ">Dashboard Revisor</span>
                    </a>    
                @endif
                @if (Auth::user()->is_writer)
                    <a href="{{route('writer.dashboard')}}" class="nav__link ">
                        <i class='bx bx-grid-alt'></i>
                        <span class="nav__name ms-1 me-2">Dashboard Author</span>
                    </a>    
                @endif
            @endauth
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 d-flex justify-content-center ">
            <a class="d-flex mt-3 ms-5">
                <i class="fa-solid fa-magnifying-glass"></i>
                <form class=" ms-1" method="GET" action="{{route('article.search')}}">
                <input type="search" class=" form-control me-2 border border-secondary" name="query" placeholder="search" >
                </form>
            </a>
        </div>        
    </div>
</div>

