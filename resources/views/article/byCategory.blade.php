<x-layout>
    <x-header 
        title="{{$category->name}}"
    />
 
  <div class="container-fluid my-3">
    <div class="row">
    @foreach ($articles as $article)
              {{-- <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <p class="card-text">{{$article->subtitle}}</p>
              <p class="card-text">{{$article->body}}</p>
              <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                Redatto il {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}}
              </div>
              <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="btn btn-primary small fst-italic text-capitalize">{{$article->user->name}}</a>
              <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio</a> --}}


                          {{-- <div class="col-8 mt-5 flex-column">
                            <span class="col-3"><h5 class="ps-3 text-bold"><a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a></h5></span>
                            <span class="col-3"><p class="ps-3 text-secondary pe-md-4">category : {{$article->category->name}}</p></span>
                            <span class="col-3"><p class="ps-3 pe-md-4">Date:{{$article->created_at->format('d/m/y')}}</p></span>
                          </div>
                        </div>
                        <div class="col-12 col-md-5  mt-md-3 me-md-4">
                          <div class="col-12 col-md-3 py-2 py-md-4 me-md-3 p-0">
                            <img class="ImgCard p-1 me-2" src="{{Storage::url($article->img)}}" alt="immagine">
                            <h2> <strong>{{substr($article->title, 0, 25)}}</strong></h2>
                            <h6 class="text-secondary">{{substr($article->subtitle, 0, 25)}}</h6>
                            <p class="font-sizeS">{{substr($article->body , 0 , 50)}}</p>
                            <div class="d-flex justify-content-end"><button class="btnArticle me-2 "><a href="{{route('article.show', compact('article'))}}" class="text-white">Detail</a></button></div>
                          </div> --}}

                  {{-- NON TOCCARE --}}

            {{-- <a href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a>
            <a href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</a>
            <p class="text-center pe-md-4">Date: {{$article->created_at->format('d/m/y')}}</p>

                <h2> <strong>{{substr($article->title, 0, 25)}}</strong></h2>
                <h6 class="text-secondary">{{substr($article->subtitle, 0, 25)}}</h6>
                <p class="font-sizeS">{{substr($article->body , 0 , 150)}}</p>
              
                <button class="btnArticle"><a href="{{route('article.show', compact('article'))}}" class="text-white font-bold">Detail</a></button> --}}

              {{-- card light blue and card light yellow--}}
      <section class="light">
        <div class="container py-3">
          
          <article class="postcard light blue">
            <a class="postcard__img_link" href="#">
              <img class="postcard__img" src="{{Storage::url($article->img)}}" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
              <h1 class="postcard__title blue"><a href="{{route('article.show', compact('article'))}}">{{$article->title}}</a></h1>
              <div class="postcard__subtitle small">
                <time datetime="2020-05-25 12:00:00">
                  <i class="fas fa-calendar-alt mr-2"></i><p><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}} Da: {{$article->user->name}} </small></p>
                </time>
              </div>
              <div class="postcard__bar"></div>
              <div class="postcard__preview-txt">{{substr($article->body, 0, 250)}}</div>
              <ul class="postcard__tagbox">
                <li class="tag__item"><i class="fas fa-tag mr-2"></i>
                  @foreach ($article->tags as $tag)
                    #{{$tag->name}}
                  @endforeach
                </li>
                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                <li class="tag__item play blue">
                  <a href="{{route('article.show', compact('article'))}}"><i class="fas fa-play mr-2"></i>Read more</a>
                </li>
              </ul>
            </div>
          </article>

          <article class="postcard light yellow">
            <a class="postcard__img_link" href="#">
              <img class="postcard__img" src="{{Storage::url($article->img)}}" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
              <h1 class="postcard__title yellow"><a href="#">{{$article->title}}</a></h1>
              <div class="postcard__subtitle small">
                <time datetime="2020-05-25 12:00:00">
                  <i class="fas fa-calendar-alt mr-2"></i><p><small class="text-muted">Data: {{$article->created_at->format('d/m/y')}} Da: <a href="{{route('article.byUser', ['user' => $article->user->id])}}"></a> {{$article->user->name}} </small></p>
                </time>
              </div>
              <div class="postcard__bar"></div>
              <div class="postcard__preview-txt">{{substr($article->body, 0, 250)}}</div>
              <ul class="postcard__tagbox">
                <li class="tag__item"><i class="fas fa-tag mr-2"></i>
                  @foreach ($article->tags as $tag)
                    #{{$tag->name}}
                  @endforeach
                </li>
                <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                <li class="tag__item play yellow">
                  <a href="{{route('article.show', compact('article'))}}"><i class="fas fa-play mr-2"></i>Read more</a>
                </li>
              </ul>
            </div>
          </article>
        </div>
      </section>

    @endforeach
    </div>
  </div>
</x-layout>