<div class="container">
    <div class="row bg-light">

        @auth
            <div class="col-4">
                    @if (Auth::user()->is_admin)
                        <a href="{{route('admin.dashboard')}}" class="nav__link">
                            <i class="fa-regular fa-folder-open"></i>
                            <span class=" ms-1 me-2">Admin Dashboard</span>
                        </a>  
                    @endif
            </div>
            <div class="col-4">
                    @if (Auth::user()->is_revisor)
                        <a href="{{route('revisor.dashboard')}}" class="nav__link ">
                            {{-- <i class='bx bx-grid-alt'></i> --}}
                            <i class="fa-regular fa-folder-open"></i>
                            <span class=" ms-1 me-2 ">Revisor Dashboard</span>
                        </a> 
                    @endif
            </div>
            <div class="col-4">
                    @if (Auth::user()->is_writer)
                        <a href="{{route('writer.dashboard')}}" class="nav__link ">
                            {{-- <i class='bx bx-grid-alt'></i> --}}
                            <i class="fa-regular fa-folder-open"></i>
                            <span class=" ms-1 me-2">Author Dashboard</span>
                        </a>  
                   @endif
            </div>
        @endauth

    </div>
</div>


{{-- <div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center ">
            <a class="d-flex mt-3 ms-5">
                <i class="fa-solid fa-magnifying-glass"></i>
                <form class=" ms-1" method="GET" action="{{route('article.search')}}">
                <input type="search" class=" form-control me-2 border border-secondary" name="query" placeholder="search" >
                </form>
            </a>
        </div>        
    </div>
</div> --}}


<div class="cntr mt-5 p-5 container">
	<div class="cntr-innr mt-5 row">
	  <label class="search" for="inpt_search">
			<input id="inpt_search" type="text" />
		</label>
		<h5 class="fw-semibold">Search</h5>
	</div>
</div>

