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
<div class="scrolling-wrapper px-5 pt-5">
  @foreach ($articles as $article)
    <div class="card position-relative">
            <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
        <div class="posizioneCard background z-index h-100 w-100">
            <h5 class="pt-5 mt-5 ps-1"> <a class="font-card1 text-white font-bold " href="{{route('article.byUser', ['user' => $article->user->id])}}"> {{$article->user->name}}</a> </h5>
            <p class="font-card ps-1  text-white z-index">categoria : {{$article->category->name}}</p> 
            <p class=" font-card ps-1 text-white z-index">data inserimento: {{$article->created_at->format('d/m/y')}}</p>
        </div>
    </div> 
  @endforeach
</div>

{{-- card grandi --}}


   @foreach ($articles as $article)

      {{-- card --}}
      <div class="container-fluid px-5 mt-5 d-none">
        <div class="row justify-content-between  primacard mx-5 px-5">
        {{-- parte sinistra --}}
        <div class="col-12 flex-column articleCellular justify-content-center aling-items-center col-md-3 mx-5">
          <div class="cerchio my-4 ms-2 my-md-5 ms-md-3">
          </div>
          <div><h5 class="text-center text-bold"> <a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5></div>
          <div><p class="text-center text-secondary ">categoria : {{$article->category->name}}</p></div>
          <div><p class="text-center ">data inserimento: {{$article->created_at->format('d/m/y')}}</p></div>
        </div>

        {{-- parte centrale --}}
        <div class="col-12 col-md-5 pt-5 mt-md-3 me-md-4">
          <div class="row">
          </div class="col text-truncate">
          <h1 class="d-inline-block text-truncate"> <strong>{{$article->title}}</strong></h1>
          <h6 class="text-secondary overflow-hidden">{{$article->subtitle}}</h6>
          <p class="font-sizeS">{{$article->body}}</p>
          <button class="btnArticle"><a href="{{route('article.show', compact('article'))}}" class="text-black font-bold">Dettaglio</a></button>
        </div>

        {{-- parte immagine --}}
        <div class="col-12 col-md-3 h-100 py-md-4 me-md-3 p-0">
          <img class="ImgCard p-3 me-2" src="{{Storage::url($article->img)}}" alt="immagine">
        </div>
      </div> 
    </div>
  
  <!-- article cellulare -->
  <div class="container-fluid my-2 mt-2 d-block d-md-none">
    <div class="row  justify-content-between  primacard pb-4">
      <div class="row  articleCellular justify-content-center aling-items-center ">
        <div class="col-3 cerchio my-4 ms-2 my-md-5 ms-md-3">
        </div>
        <div class="col-8 mt-5 flex-column">
          <span class="col-3"><h5 class="text-center text-bold"><a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5></span>
          <span class="col-3"><p class="text-center text-secondary pe-md-4">categoria : {{$article->category->name}}</p></span>
          <span class="col-3"><p class="text-center pe-md-4">data inserimento:{{$article->created_at->format('d/m/y')}}</p></span>
        </div>
      </div>
        <div class="col-12 col-md-5  mt-md-3 me-md-4">
          <div class="col-12 col-md-3 h-100 py-md-4 me-md-3 p-0">
            <img class="ImgCard p-1 me-2" src="{{Storage::url($article->img)}}" alt="immagine">
            <h1> <strong>{{$article->title}}</strong></h1>
            <h6 class="text-secondary">{{$article->subtitle}}</h6>
            <p class="font-sizeS">{{$article->body}}</p>
            <div class="d-flex justify-content-end"><button class="btnArticle me-2 "><a href="{{route('article.show', compact('article'))}}" class="text-black font-bold">Dettaglio</a></button></div>
          </div>
        </div>
    </div> 
  </div>

 @endforeach


<div class="cerchioSF"></div>
</x-layout>