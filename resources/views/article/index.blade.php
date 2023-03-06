<x-layout>
    <x-header 
        title="Tutti gli Articoli"
    />
    <div class="scrolling-wrapper px-3 pt-1">
        @foreach ($articles as $article)
                <div class="card position-relative">
                        <img class="card " src="{{Storage::url($article->img)}}" alt="">
                    <div class="posizioneCard background z-index h-100 w-100 align-item-bottom">
                        {{-- <h5 class="pt-5 mt-5 ps-1"> <a class="font-card text-white " href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a> </h5> --}}
                        <h6 class=" ps-1 pt-5 mt-5 text-white z-index text-center"> {{$article->title}}</h6>
                        <p class="font-card ps-1  text-white z-index text-center"> {{$article->category->name}}</p>
                        {{-- <p class=" font-card ps-1 text-white z-index">data inserimento: {{$article->created_at->format('d/m/y')}}</p> --}}
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