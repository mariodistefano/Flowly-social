<x-layout>
  <x-header 
    title="Aulab Post"
  />

  @if (session('message'))
    <div class="alert alert-success text-center">
      {{session('message')}}
    </div>
  @endif

  {{-- articoli con scrol --}}
  <div class="scrolling-wrapper px-3 pt-1">
    @foreach ($articles as $article)
       <div class="card position-relative">
              <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
           <div class="posizioneCard background z-index h-100 w-100">
              <h5 class="pt-5 mt-5 ps-1"> <a class="font-card1 text-white font-bold " href="">{{substr($article->title, 0, 16)}}</a> </h5>
              <p class="font-card ps-1  text-white z-index">categoria : {{$article->category->name}}</p> 
              <p class=" font-card ps-1 text-white z-index">data inserimento: {{$article->created_at->format('d/m/y')}}</p>
           </div>
       </div> 
    @endforeach
  </div>

{{-- card grandi --}}

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