<x-layout>
  
  {{-- <x-header 
    title="Aulab Post"
  /> --}}

 

  @if (session('message'))
    <div class="alert alert-success text-center">
      {{session('message')}}
    </div>
  @endif

<div class="container-fluid">
  <div class="header">
    <div>
      <h1 class="text-white text-center mt-5">The FooL</h1>
      <h2 class="text-white text-center mt-5">" Facts of ours Lives "</h2>
    </div>
    <div class="info">
      <h4><a href="#category">DESIGN</a></h4>
          <p  href="" target="_b" class="author"></p><br>
          By <a href="" target="_b" class="underlineTitol">4 Run Away From Home</a> on March 11, 2023
          <p>...</p>
    </div>
  </div>
</div>


  <h1 class="text-bold p-5 text-center light">Mi sono sminchiato totale ... tutta la notte davanti a sto coso...<br>ma io barcollo ma non mollo !!!!!!! xD  </h1>

  {{-- articoli con scrol --}}
  {{-- <div class="scrolling-wrapper px-3 pt-1">
    @foreach ($articles as $article)
       <div class="card position-relative">
                <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
                <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
            <div class="posizioneCard background d-flex align-items-center pt-5 pe-4 justify-content-center z-index h-100 w-100">
                <h5> <a class="font-card1 text-white font-bold " href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</h5>
            </div>
       </div> 
    @endforeach
</div> --}}

{{-- card grandi --}}

  {{-- <div class="my-3">
    <div class="row mx-5"> --}}
        @if ($articles->isNotEmpty())
             @foreach ($articles as $article)
                <x-article-card
                  :article="$article"
                />
             @endforeach
        @endif
    {{-- </div>
  </div> --}}


</x-layout>