{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" /> --}}


    {{-- <div class="card l-bg-blue-dark">
    <div class="card l-bg-green-dark">
        <i class="fas fa-ticket-alt"></i> --}}

    <div class="col-6 col-md-2">
        <div class="card l-bg-blue-dark">
            <div class="card-statistic-3 p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-users pe-2"></i></div>
                <div class="mb-4">
                    <h4 class="mb-0 text-white text-start text-bold"> <a class="text-white" href="{{route('article.byCategory', ['category' => $category->id])}}">{{$category->name}} </a> </h4>
                </div>
                <div class="row align-items-center mb-2 d-flex">
                    <div class="col-10 ">
                        <h3 class="text-white mb-0">
                            15
                        </h3>
                    </div>
                </div>
                <div class="progress mt-1 " style="height: 8px;">
                    <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>


