<x-layout>
    <x-header
        title="Dettaglio Articolo: {{$article->title}}"
    />
{{-- cellulare --}}
<div class="container d-block d-md-none me-5 p-5 articleDetail my-3">
    <div class="row justify-content-center">
        <div class="col-10 d-flex justify-content-center col-md-10 col-lg-8">
                <img class="imgDetail" src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
            </div>
                <div class="col-10">
                  <h5 class="card-title text-center">{{$article->title}}</h5>
                  <p class="card-text text-black text-center">{{$article->subtitle}}</p>
                  <p class="card-text text-black text-center">{{$article->category->name}}</p>
                  <p class="card-text text-black text-center">{{$article->body}}</p>
                  <p class="card-text text-black text-center"><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}} </small></p>
                  <div class="col-12 d-flex justify-content-center">
                  <a href="{{route('article.index')}}" class="btnHEADER pt-1 me-3">Torna ad Articoli</a>
                  <a href="{{route('comment.create')}}" class="btnHEADER pt-1">commenta</a>
                </div>
                    @if (Auth::user() && Auth::user()->is_revisor)
                        <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-info text-white">Accetta l'articolo</a>
                        <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-info text-white">Rifiuta l'articolo</a>
                    @endif
            </div>
        </div>
    </div>
</div>

{{-- pc --}}
<div class="container d-none d-md-block me-5 p-5 articleDetail my-3">
    <div class="row ">
        <div class="col-12  col-md-6 col-lg-6">
                <img class="imgDetail" src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
            </div>
                <div class="col-10 col-md-6 d-none d-md-block">
                  <h5 class="card-title ">{{$article->title}}</h5>
                  <p class="card-text text-black ">{{$article->subtitle}}</p>
                  <p class="card-text text-black ">{{$article->category->name}}</p>
                  <p class="card-text text-black ">{{$article->body}}</p>
                  <p class="card-text text-black "><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}} </small></p>
                  <a href="{{route('article.index')}}" class="btnHEADER pt-1 me-3">Torna ad Articoli</a>
                  {{-- <a href="{{route('comment.create')}}" class="btnHEADER pt-1">commenta</a> --}}
                  @if (Auth::user() && Auth::user()->is_revisor)
                  <div class="mt-3">
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-info text-white">Accetta l'articolo</a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-info text-white">Rifiuta l'articolo</a>
                  </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>



</x-layout>