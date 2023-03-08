<x-layout>
    <x-header 
        title="Tutti gli Articoli"
    />
    <div class="scrolling-wrapper px-3 pt-1">
        @foreach ($categories as $category)
           <div class="card position-relative">
                    {{-- <img class="card " src="{{Storage::url($article->img)}}" alt="immagine"> --}}
                    {{-- <img class="card " src="{{Storage::url($article->img)}}" alt="immagine"> --}}
                <div class="posizioneCard background z-index h-100 w-100">
                    <h5 class="pt-5 mt-5 ps-1"> <a class="font-card1 text-white font-bold " href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</h5>
                </div>
           </div> 
        @endforeach
    </div>
    <div class="container my-3">
        <div class="row mx-5">
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