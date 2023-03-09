<x-layout>
    <x-header 
        title="{{$user->name}}"
    />

    <div class="container-fluid my-3">
        <div class="row justify-content-center text-center">
            @foreach ($articles as $article)
                {{-- <div class="col-6 text-black mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">{{$article->title}}</h5>
                            <p class="card-text text-black">{{$article->subtitle}}</p>
                            <p class="card-text text-black">{{$article->category->name}}</p>
                            <p class="card-text text-black">{{substr($article->body, 0, 200)}} ...</p>
                            <div class="card-footer text-muted d-flex justify-content-between align-items-center text-black">
                                Redatto il {{$article->created_at->format('d/m/y')}}
                            </div>
                            <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="btn btn-primary small fst-italic text-capitalize">{{$article->category->name}}</a>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div> --}}



                <div class="container-fluid my-2 mt-2 d-block d-md-none">
                    <div class="row  justify-content-between  primacard pb-4">
                        <div class="row  articleCellular justify-content-center aling-items-center ">
                          <div class="col-3 cerchio my-4 ms-2 my-md-5 ms-md-3">
                          </div>
                          <div class="col-8 mt-5 flex-column">
                            <span class="col-3"><h5 class="ps-3 text-bold"><a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5></span>
                            <span class="col-3"><p class="ps-3 text-secondary pe-md-4">categoria : {{$article->category->name}}</p></span>
                            <span class="col-3"><p class="ps-3 pe-md-4">data inserimento:{{$article->created_at->format('d/m/y')}}</p></span>
                          </div>
                        </div>
                        <div class="col-12 col-md-5  mt-md-3 me-md-4">
                          <div class="col-12 col-md-3 py-2 py-md-4 me-md-3 p-0">
                            <img class="ImgCard p-1 me-2" src="{{Storage::url($article->img)}}" alt="immagine">
                            <h2> <strong>{{substr($article->title, 0, 25)}}</strong></h2>
                            <h6 class="text-secondary">{{substr($article->subtitle, 0, 25)}}</h6>
                            <p class="font-sizeS">{{substr($article->body , 0 , 50)}}</p>
                            <div class="d-flex justify-content-end"><button class="btnArticle me-2 "><a href="{{route('article.show', compact('article'))}}" class="text-white">Dettaglio</a></button></div>
                          </div>
                            <!--qui  -->
                        </div>
                    </div>  
                  </div>
                  
                  
                  
                  {{-- NON TOCCARE --}}
                  
                  <div class="container-fluid px-5 mt-5 d-none d-md-block margine-prova">
                    <div class="row sfondoCard justify-content-between  primacard ">
                      <div class="col-12 flex-column articleCellular justify-content-center aling-items-center col-md-3">
                        <div class="col-3 cerchio my-4 ms-2 my-md-5 ms-md-3">
                        </div>
                        <!-- <div class="articleCellular"> -->
                        <span class="col-3"><h5 class="text-center pe-md-4 text-bold"><a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5></span>
                        <span class="col-3"><p class="text-center text-secondary pe-md-4"><a href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</a></p>
                          </span>
                        <span class="col-3"><p class="text-center pe-md-4">publicato: {{$article->created_at->format('d/m/y')}}</p></span>
                      </div>
                    <!-- </div> -->
                        <div class="col-12 col-md-5 pt-5 mt-md-3 me-md-4">
                          <h2> <strong>{{substr($article->title, 0, 25)}}</strong></h2>
                          <h6 class="text-secondary">{{substr($article->subtitle, 0, 25)}}</h6>
                          <p class="font-sizeS">{{substr($article->body , 0 , 150)}}</p>
                        
                         <button class="btnArticle"><a href="{{route('article.show', compact('article'))}}" class="text-white font-bold">Dettaglio</a></button>
                        </div>
                          <div class="col-12 col-md-3 h-100 py-md-4 me-md-3 p-0">
                            <img class="ImgCard p-3 me-2" src="{{Storage::url($article->img)}}" alt="immagine">
                          </div>
                       </div> 
                    </div>
            @endforeach
        </div>
    </div>

</x-layout>