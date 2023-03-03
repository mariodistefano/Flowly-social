<x-layout>
    <x-header 
        title="Aulab Post"
    />

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <div class="container my-3">
        <div class="row justify-content-center">

            @foreach ($articles as $article)
               <!-- card -->
 <div class="container-fluid px-5 mt-5 d-none d-md-block margine-prova">
    <div class="row  justify-content-between  primacard ">
      <div class="col-12 flex-column articleCellular justify-content-center aling-items-center col-md-3">
        <div class="col-3 cerchio my-4 ms-2 my-md-5 ms-md-3">
        </div>
        <!-- <div class="articleCellular"> -->
        <span class="col-3"><h5 class="text-center pe-md-4 text-bold"> <a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5></span>
        <span class="col-3"><p class="text-center text-secondary pe-md-4">categoria : {{$article->category->name}}</p></span>
        <span class="col-3"><p class="text-center pe-md-4">data inserimento: {{$article->created_at->format('d/m/y')}}</p></span>
      </div>
    <!-- </div> -->
        <div class="col-12 col-md-5 pt-5 mt-md-3 me-md-4">
          <h1> <strong>{{$article->title}}</strong></h1>
          <h6 class="text-secondary">{{$article->subtitle}}</h6>
          <p class="font-sizeS">{{$article->body}}</p>
         <button class="btnArticle"><a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a></button>
        </div>
          <div class="col-12 col-md-3 h-100 py-md-4 me-md-3 p-0">
            <img class="ImgCard p-3 me-2" src="{{Storage::url($article->img)}}" alt="immagine">
          </div>
       </div> 
    </div>
    
    
    <!-- article cellulare -->
    
    <div class="container-fluid  mt-5 pb-5 d-block d-md-none">
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
        
         <div class="d-flex justify-content-end"><button class="btnArticle me-2 "><a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a></button></div>
       </div>
        
        
         <!--qui  -->
        </div>
      </div> 
      
    </div>
       
            @endforeach

        </div>
    </div>

</x-layout>