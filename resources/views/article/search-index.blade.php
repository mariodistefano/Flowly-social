<x-layout>
    <x-header
    title='Tutti gli articoli per: {{$query}}'
    />


    <div class="container-fluid my-3">
        <div class="row justify-content-center text-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <p>
                                @foreach ($article->tags as $tag)
                                    #{{$tag->name}}
                                @endforeach
                            </p>
                            @if ($article->category)
                            <a href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</a>
                          @else
                            <p class="small text-muted fst-italic text-capitalize">Not categorized</p>
                          @endif
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-content-center">
                            <a href="{{route('article.byUser' , ['user' => $article->user->id])}}">edited on {{$article->created_at->format('d/m/y')}} by {{$article->user->name}}</a>
                            <a href="{{route('article.show' , compact('article'))}}" class="btn btn-info text-white">Read</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>





</x-layout>