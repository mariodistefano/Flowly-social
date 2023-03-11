<x-layout>
    <x-header 
        title="Tutti gli Articoli"
    />

    <h1 class="text-bold p-5 text-center light">... è notte fonda e sono sveglio e voi dormite lossò... con la bolla al naso...<br> vi odio tutti...io odio il mondo!!!</h1>

    {{-- <div class="scrolling-wrapper px-3 pt-1 mb-5"> --}}
        {{-- @foreach ($articles as $article)
           <div class="card position-relative">
                    <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
                    <img class="card " src="/public/img/default.jpg" alt="immagine">
                <div class="posizioneCard background d-flex align-items-center pt-5 pe-4 justify-content-center z-index h-100 w-100">
                    <h5> <a class="font-card1 text-white font-bold " href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</h5>
                </div>
           </div> 
        @endforeach --}}

        <div class="container light py-5">
            <div class="row ">
                @foreach ($categories as $category)
                    <x-card-scroll 
                        :category="$category"
                    />
                @endforeach
            </div>
        </div>
    {{-- </div> --}}
 
            @if ($articles->isNotEmpty())
                @foreach ($articles as $article)
                    <x-article-card
                        :article="$article"
                    />
                @endforeach
            @endif

    
</x-layout>