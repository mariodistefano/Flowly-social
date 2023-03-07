<x-layout>
    <x-header 
        title="Scritto da: {{$user->name}}"
    />

    <div class="container-fluid my-3">
        <div class="row justify-content-center text-center">
            @foreach ($articles as $article)
                <div class="col-6 text-black mb-5">
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
                            {{-- <p class="card-text"><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}}</small></p> --}}
                            {{-- <a href="{{route('article.show', ['title' => $article->title])}}" class="btn btn-success">Dettaglio</a> --}}
                            <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="btn btn-primary small fst-italic text-capitalize">{{$article->category->name}}</a>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>