<div class="card position-relative">
    <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
<div class="posizioneCard background z-index h-100 w-100">
    <h5 class="pt-5 mt-5 ps-1"> <a class="font-card1 text-white font-bold " href="{{route('article.byUser', ['user' => $article->user->id])}}"> {{substr($article->title , 0,10)}}</a> </h5>
    <p class="font-card ps-1  text-white z-index">categoria : {{$article->category->name}}</p> 
    <p class=" font-card ps-1 text-white z-index">data inserimento: {{$article->created_at->format('d/m/y')}}</p>
</div>
</div> 