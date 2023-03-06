<x-layout>
    <x-header 
        title="Categoria: {{$category->name}}"
    />
 
    <div class="container-fluid my-3">
        <div class="row justify-content-center text-center">
            @foreach ($articles as $article)
                <div class="col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <p class="card-text">{{$article->body}}</p>
                            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                                Redatto il {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}}
                            </div>
                            {{-- <p class="card-text"><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}}</small></p> --}}
                            {{-- <a href="{{route('article.show', ['title' => $article->title])}}" class="btn btn-success">Dettaglio</a> --}}
                            <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="btn btn-primary small fst-italic text-capitalize">{{$article->user->name}}</a>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>