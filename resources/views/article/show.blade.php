<x-layout>
    <x-header
    title="{{$article->name}}"
    />
        {{-- title="Dettaglio Articolo: {{$article->title}}" --}}
    

{{-- nuova show --}}

<div class=bodyshow>
    <header class="headershow" class="zoom-me">
        {{-- <img src="https://unsplash.it/1200/800?image=838"> --}}
        <img src="{{Storage::url($article->img)}}" alt=""> 
    </header>
    <main class="mainshow" role="main">
        <div class="containedshow">
            <h1 class="h1show text-center my-5">{{$article->title}}</h1>
            <p>{{$article->subtitle}}</p>
            @if ($article->category)
                <span class="col-3"><p class="text-secondary pe-md-4"><a href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</a></p></span>
            @else
                <p class="small text-muted fst-italic text-capitalize">Non categorizzato</p>
            @endif
            
            <p><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}} </small></p>
            <p>{{$article->body}}</p>

            <a href="{{route('article.index')}}" class="btnshow btnshow-primary pt-1 me-3">Torna ad Articoli</a>
            @if (Auth::user() && Auth::user()->is_revisor && $article->is_accepted != 1)
                <div class="mt-3">
                <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btnshow btn-info text-white">Accetta l'articolo</a>
                <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btnshow btn-info text-white">Rifiuta l'articolo</a>
                </div>
            @endif

            {{-- <h2>Vehicula Euismod Aenean</h2> --}}
        </div>
    </main>
</div>





</x-layout>