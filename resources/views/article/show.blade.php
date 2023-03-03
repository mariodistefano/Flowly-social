<x-layout>
    <x-header
        title="Dettaglio Articolo: {{$article->title}}"
    />

<div class="container my-3">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->subtitle}}</p>
                  <p class="card-text">{{$article->category->name}}</p>
                  <p class="card-text">{{$article->body}}</p>
                  <p class="card-text"><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}} </small></p>
                  <a href="{{route('article.index')}}" class="btn btn-primary">Torna Indietro</a>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>