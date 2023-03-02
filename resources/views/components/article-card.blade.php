<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <p class="card-text">{{$article->subtitle}}</p>
      <p class="card-text">{{$article->category->name}}</p>
      <p class="card-text">{{$article->body}}</p>
      <p class="card-text"><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}}</small></p>
      {{-- <a href="{{route('article.detail', ['title' => $article->title])}}" class="btn btn-success">Dettaglio</a> --}}

      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>