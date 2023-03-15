{{-- <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6">

            <div class="w-100 mb-4">
                <form class="ms-1 d-flex" method="GET" action="{{route('article.search')}}">
                    <input type="search" class=" form-control me-2 border border-secondary text-center" name="query" placeholder="Search for: Title, Subtitle and Category">
                    <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
                
        </div>        
    </div>
</div> --}}

<div class="container mb-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-around">
            @auth
                @if (Auth::user()->is_admin)
                    <a href="{{route('admin.dashboard')}}" class="nav__link ">
                        <i class="fa-regular fa-folder-open"></i>
                        <span class="nav__name ms-1 me-2">Admin</span>
                    </a>    
                @endif
                @if (Auth::user()->is_revisor)
                    <a href="{{route('revisor.dashboard')}}" class="nav__link ">
                        <i class='bx bx-grid-alt'></i>
                        <span class="nav__name ms-1 me-2 ">Revisor</span>
                    </a>    
                @endif
                @if (Auth::user()->is_writer)
                    <a href="{{route('writer.dashboard')}}" class="nav__link ">
                        <i class='bx bx-grid-alt'></i>
                        <span class="nav__name ms-1 me-2">Author</span>
                    </a>    
                @endif
            @endauth
        </div>
    </div>
</div>