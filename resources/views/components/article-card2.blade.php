<section class="light">
    <div class="container py-3">
  {{-- flex-row-reverse --}}
      <article class="postcard light yellow ">
        <a class="postcard__img_link" href="#">
          <img class="postcard__img" src="{{Storage::url($article->img)}}" alt="Image Title" />
        </a>
        <div class="postcard__text t-dark">
          <h2 class="postcard__title yellow">
            <a href="{{route('article.show', compact('article'))}}">{{$article->title}}</a>
          </h2>
          <div class="postcard__subtitle small">
            <p class="mb-0">
              <i class="fas fa-calendar-alt mr-2"></i> {{$article->created_at->format('d/m/y')}} Da: 
              <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="fs-6"> {{$article->user->name}}
              </a>
            </p>
          </div>
          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">{{substr($article->body, 0, 250)}}</div>
          <ul class="postcard__tagbox">
            <li class="tag__item"><i class="fas fa-clock mr-2"></i>
              <a href="{{route('article.byCategory', ['category' => $article->category->id])}}"> {{$article->category->name}}</a>
            </li>
            <li class="tag__item"><i class="fas fa-tag mr-2"></i>
              @foreach ($article->tags as $tag)
                #{{$tag->name}}
              @endforeach
            </li>
            <li class="tag__item play blue">
              <a href="{{route('article.show', compact('article'))}}">
                <i class="fas fa-play mr-2"></i> Read more
              </a>
            </li>
          </ul>
        </div>
      </article>
    </div>
  </section>