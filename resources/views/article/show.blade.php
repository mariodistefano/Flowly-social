<x-layout>
    <x-header
        title="Dettaglio Articolo: {{$article->title}}"
    />

<div class="container my3">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-8 col-lg-6">
            <img class="imgDetail" src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
        </div>
        <div class="col-12 col-md-8 col-lg-6 d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title ">{{$article->title}}</h5>
            <p class="card-text text-black ">{{$article->subtitle}}</p>
            @if ($article->category)
                <span class="col-3"><p class="text-secondary pe-md-4"><a href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</a></p></span>
            @else
                <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
            @endif
            <p class="card-text text-black ">{{$article->body}}</p>
            <p class="card-text text-black "><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}} </small></p>
            <a href="{{route('article.index')}}" class="btnHEADER pt-1 me-3">Torna ad Articoli</a>

            @if (Auth::user() && Auth::user()->is_revisor)
            <div class="mt-3">
              <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-info text-white">Accetta l'articolo</a>
              <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-info text-white">Rifiuta l'articolo</a>
            </div>
            @endif
        </div>
    </div>
</div>

</x-layout>