<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6">
            {{-- <div class="mb-3">
                
            </div> --}}
            <div class="w-100">
                <form class="ms-1 d-flex" method="GET" action="{{route('article.search')}}">
                    <input type="search" class=" form-control me-2 border border-secondary text-center rounded-pill" name="query" placeholder="Search for: Title, Subtitle and Category">
                    <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
                
        </div>        
    </div>
</div>