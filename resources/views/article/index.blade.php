<x-layout>
    <x-header 
        title="Tutti gli Articoli"
    />
    <div class="scrolling-wrapper px-3 pt-1">
        @foreach ($articles as $article)
           <div class="card position-relative">
                    {{-- <img class="card " src="{{Storage::url($article->img)}}" alt="immagine"> --}}
                    <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
                <div class="posizioneCard background d-flex align-items-center pt-5 pe-4 justify-content-center z-index h-100 w-100">
                    <h5> <a class="font-card1 text-white font-bold " href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</h5>
                </div>
           </div> 
        @endforeach
    </div>
 
            @if ($articles->isNotEmpty())
                @foreach ($articles as $article)
                    <x-article-card
                        :article="$article"
                    />
                @endforeach
            @endif
 
<div class="cerchioSF"></div>
<div class="cerchioSF1 d-none d-md-block"></div>
<div class="cerchioSF2 d-none d-md-block"></div>
<div class="cerchioSF3 d-none d-md-block"></div>
<div class="cerchioSF4 d-none d-md-block"></div>
    
</x-layout>