<!-- card -->
{{-- <div class="container-fluid ">
  <div class="row  justify-content-between primacard">
    <div class="col-12 flex-column articleCellular justify-content-center aling-items-center col-md-3">
      <div class="col-3 cerchio m-1 m-md-3">
      </div>
      <!-- <div class="articleCellular"> -->
      <span class="col-3"><h5 class="ps-3 text-bold"> <a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5></span>
      <span class="col-3"><p class="ps-3 text-secondary">categoria : {{$article->category->name}}</p></span>
      <span class="col-3 pb-5"><p class="ps-3">data inserimento: {{$article->created_at->format('d/m/y')}}</p></span>
    </div>
      <!-- </div> -->
    <div class="col-12 col-md-6 pt-3 mt-md-3 me-md-3">
      <h3> <strong>{{substr($article->title, 0, 25)}}</strong></h3>
      <h6 class="text-secondary">{{substr($article->subtitle, 0, 25)}}</h6>
      <p class="font-sizeS">{{substr($article->body, 0, 150)}} ...</p>
        <!-- <div class="articleCellular"> -->
        <h5 class="text-semibold"> <a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5>
        <p class="text-secondary">categoria : {{$article->category->name}}</p>
        <p class="">data inserimento: {{$article->created_at->format('d/m/y')}}</p>
    </div>

      <button class="btnArticle"><a href="{{route('article.show', compact('article'))}}" class="text-black font-bold">Dettaglio</a></button>
    </div>
    <div class="col-12 col-md-3 h-100 py-md-2 p-0">
      <img class="ImgCard p-3" src="{{Storage::url($article->img)}}" alt="immagine">
    </div>
  </div> 
</div>
</div> --}}

<!-- article cellulare -->

<div class="container-fluid my-2 mt-2 d-block d-md-none">
  <div class="row  justify-content-between  primacard pb-4">
      <div class="row  articleCellular justify-content-center aling-items-center ">
        <div class="col-3 cerchio my-4 ms-2 my-md-5 ms-md-3">
        </div>
        <div class="col-8 mt-5 flex-column">
          <span class="col-3"><h5 class="ps-3 text-bold"><a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5></span>
          <span class="col-3"><p class="ps-3 text-secondary pe-md-4">categoria : {{$article->category->name}}</p></span>
          <span class="col-3"><p class="ps-3 pe-md-4">data inserimento:{{$article->created_at->format('d/m/y')}}</p></span>
        </div>
      </div>
      <div class="col-12 col-md-5  mt-md-3 me-md-4">
        <div class="col-12 col-md-3 py-2 py-md-4 me-md-3 p-0">
          <img class="ImgCard p-1 me-2" src="{{Storage::url($article->img)}}" alt="immagine">
          <h1> <strong>{{$article->title}}</strong></h1>
          <h6 class="text-secondary">{{$article->subtitle}}</h6>
          <p class="font-sizeS">{{$article->body}}</p>
          <div class="d-flex justify-content-end"><button class="btnArticle me-2 "><a href="{{route('article.show', compact('article'))}}" class="text-black font-bold">Dettaglio</a></button></div>
        </div>
          <!--qui  -->
      </div>
  </div>  
</div>



{{-- NON TOCCARE --}}

<div class="container-fluid px-5 mt-5 d-none d-md-block margine-prova">
  <div class="row sfondoCard justify-content-between  primacard ">
    <div class="col-12 flex-column articleCellular justify-content-center aling-items-center col-md-3">
      <div class="col-3 cerchio my-4 ms-2 my-md-5 ms-md-3">
      </div>
      <!-- <div class="articleCellular"> -->
      <span class="col-3"><h5 class="text-center pe-md-4 text-bold">Mario Di Stefano</h5></span>
      <span class="col-3"><p class="text-center text-secondary pe-md-4">Design di interni</p></span>
      <span class="col-3"><p class="text-center pe-md-4">data inserimento: 03/03/23</p></span>
    </div>
  <!-- </div> -->
      <div class="col-12 col-md-5 pt-5 mt-md-3 me-md-4">
        <h1> <strong>Lorem</strong></h1>
        <h6 class="text-secondary">Lorem ipsum</h6>
        <p class="font-sizeS">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad tempora aliquam enim officia nihil possimus
          veniam et ducimus, non sit debitis consequuntur! Repellendus quisquam totam, blanditiis repudiandae sapiente
          ipsum aliquid!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At facere, alias veniam voluptatum nam illo magni
          doloremque inventore dolorem eius quas! Illo labore id iure harum ex reiciendis excepturi hic!</p>
       <button class="btnArticle"><a href="{{route('article.show', compact('article'))}}" class="text-black font-bold">Dettaglio</a></button>
      </div>
        <div class="col-12 col-md-3 h-100 py-md-4 me-md-3 p-0">
          <img class="ImgCard p-3 me-2" src="./img/castle-g0578dbfee_1920.jpg" alt="immagine">
        </div>
     </div> 
  </div>