<x-layout>
    <x-header
        title="Dettaglio Articolo: {{$article->title}}"
    />

<div class="container-fluid my-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div>
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->subtitle}}</p>
                  <p class="card-text">{{$article->category->name}}</p>
                  <p class="card-text">{{$article->body}}</p>
                  <p class="card-text"><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}} </small></p>
                  <a href="{{route('article.index')}}" class="btn btn-primary">Torna Indietro</a>
                    @if (Auth::user() && Auth::user()->is_revisor)
                        <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-info text-white">Accetta l'articolo</a>
                        <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-info text-white">Rifiuta l'articolo</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>


{{-- <a href="{{route('comment.create')}}" class="btn btn-primary">commenta</a> --}}

{{-- @foreach ($comments as $comment)
<div class="card">
  <a href="{{route('comment.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a>
  <p class="card-text">{{$comment->body}}</p>
  <p class="text-center">data inserimento: {{$comment->created_at->format('d/m/y')}}</p>
</div> 
@endforeach --}}

</x-layout>