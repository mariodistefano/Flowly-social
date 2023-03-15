<x-layout>
    

{{-- show --}}
{{-- <img src="https://unsplash.it/1200/800?image=838"> --}}

{{-- <div class=bodyshow>
    <header class="headershow" class="zoom-me">
      
           
       
</div> --}}


    <header class="zoom">
        <img class="" src="{{Storage::url($article->img)}}" alt=""> 
    </header>
    <main role="main" class="mainShow">
        <div class="contentShow">
            <h1 class="text-center my-5 display-4"><strong>{{$article->title}}</strong></h1>
            <h2 class="text-secondary">{{$article->subtitle}}</h2>
                @if ($article->category)
                    <h6 class="text-secondary pe-md-4"><a class="text-secondary" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</a></h6>
                @else
                    <p class="text-warning">Not categorized</p>
                @endif
                
                <h6 class="text-secondary">Date: {{$article->created_at->format('d/m/y')}} by: {{$article->user->name}}</h6>
                <h6 class="text-secondary">{{$article->body}}</h6>
                {{-- <img style="width: 300px; height:300px" class="my-5" src="{{Storage::url($article->img)}}" alt=""> --}}

                <a href="{{route('article.index')}}" class="btn btn-radius py-1 mb-2 mt-1 btn-secondary"  ><i class="fa-sharp fa-solid fa-rotate-left"></i></a>
                @if (Auth::user() && Auth::user()->is_revisor && $article->is_accepted != 1)
                    <div class="mt-3 mb-5">
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-radius text-white pb-1 btn-colorPersonal"><i class="fa-solid fa-check"></i></a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-radius  text-white pb-1 btn-colorPersonal2"><i class="fa-solid fa-trash"></i></a>
                    </div>
                @endif
        </div>
    </main>

   <div class="altezza">.</div>

</x-layout>