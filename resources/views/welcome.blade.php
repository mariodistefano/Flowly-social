<x-layout>
    <x-header 
        title="Aulab Post"
    />

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <div class="container my-3">
        <div class="row justify-content-center">

            @foreach ($articles as $article)
                <div class="col-12 col-md-6-col-lg-6">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->subtitle}}</p>
                          <p class="card-text">{{$article->category->name}}</p>
                          <p class="card-text">{{$article->body}}</p>
                          <p class="card-text"><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}}</small></p>
                          {{-- <a href="{{route('article.detail', ['title' => $article->title])}}" class="btn btn-success">Dettaglio</a> --}}
                    
                          <a href="#" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-layout>