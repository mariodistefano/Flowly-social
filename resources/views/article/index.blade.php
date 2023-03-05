<x-layout>
    <x-header 
        title="Tutti gli Articoli"
    />
    <div class="scrolling-wrapper px-5 pt-5">
        @foreach ($articles as $article)
            <div class="card">
              <a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a> 
              <p class="text-center text-secondary">categoria : {{$article->category->name}}</p> 
              <p class="text-center">data inserimento: {{$article->created_at->format('d/m/y')}}</p>
            </div> 
          @endforeach
        </div>
    <div class="container my-3">
        <div class="row">
                @if ($articles->isNotEmpty())
                    @foreach ($articles as $article)
                            <x-article-card
                                :article="$article"
                            />
                    @endforeach
                @endif
        </div>
    </div>
<div class="cerchioSF"></div>
    
</x-layout>