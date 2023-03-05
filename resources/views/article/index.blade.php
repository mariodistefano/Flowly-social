<x-layout>
    <x-header 
        title="Tutti gli Articoli"
    />
    <div class="scrolling-wrapper px-5 pt-5">
        @foreach ($articles as $article)
                <div class="card position-relative">
                        <img class="card " src="{{Storage::url($article->img)}}" alt="">
                    <div class="posizioneCard background z-index h-100 w-100">
                        <h5 class="pt-5 mt-5 ps-1"> <a class="font-card text-white " href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a> </h5>
                        <p class="font-card ps-1  text-white z-index">categoria : {{$article->category->name}}</p> 
                        <p class=" font-card ps-1 text-white z-index">data inserimento: {{$article->created_at->format('d/m/y')}}</p>
                    </div>
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