 {{-- card light blue and card light yellow--}}
<section class="light">
  <div class="container py-3">
    
    <article class="postcard light blue">
      <a class="postcard__img_link" href="#">
        <img class="postcard__img" src="{{Storage::url($article->img)}}" alt="Image Title" />
      </a>
      <div class="postcard__text t-dark">
          <h1 class="postcard__title blue">
            <a href="{{route('article.show', compact('article'))}}">{{$article->title}}</a>
          </h1>
          <div class="postcard__subtitle small">
            <p class="mb-0">
              <i class="fas fa-calendar-alt mr-2"></i> {{$article->created_at->format('d/m/y')}} 
              <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class=""> Da: {{$article->user->name}}
              </a>
            </p>
          </div>
          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">{{substr($article->body, 0, 250)}}</div>
          <ul class="postcard__tagbox">
            <li class="tag__item"><i class="fas fa-tag mr-2"></i>
              @foreach ($article->tags as $tag)
                #{{$tag->name}}
              @endforeach
            </li>
            <li class="tag__item"><i class="fas fa-clock mr-2"></i>
              <a href="{{route('article.byCategory', ['category' => $article->category->id])}}"> {{$article->category->name}}</a>
            </li>
            <li class="tag__item play blue">
              <a href="{{route('article.show', compact('article'))}}">
                <i class="fas fa-play mr-2"></i> Read more
              </a>
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
            <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
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












                        {{-- dark card yellow and dark card blue--}}

  {{-- <section class="dark">
    <div class="container py-4">

      <article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
  
      <article class="postcard dark yellow">
        <a class="postcard__img_link" href="#">
          <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
        </a>
        <div class="postcard__text">
          <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
          <div class="postcard__subtitle small">
            <time datetime="2020-05-25 12:00:00">
              <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
            </time>
          </div>
          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
          <ul class="postcard__tagbox">
            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
            <li class="tag__item play yellow">
              <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
            </li>
          </ul>
        </div>
      </article>
    </div>
  </section> --}}











                              {{-- card buona funzionante --}}

{{-- <div class="blog-card">
  <div class="meta">
    <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
    <ul class="details">
      <li class="author"><a href="#">John Doe</a></li>
      <li class="date">Aug. 24, 2015</li>
      <li class="tags">
        <ul>
          <li><a href="#">Learn</a></li>
          <li><a href="#">Code</a></li>
          <li><a href="#">HTML</a></li>
          <li><a href="#">CSS</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="description">
    <h1>Learning to Code</h1>
    <h2>Opening a door to the future</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
    <p class="read-more">
      <a href="#">Read More</a>
    </p>
  </div>
</div>
<div class="blog-card alt">
  <div class="meta">
    <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
    <ul class="details">
      <li class="author"><a href="#">Jane Doe</a></li>
      <li class="date">July. 15, 2015</li>
      <li class="tags">
        <ul>
          <li><a href="#">Learn</a></li>
          <li><a href="#">Code</a></li>
          <li><a href="#">JavaScript</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="description">
    <h1>Mastering the Language</h1>
    <h2>Java is not the same as JavaScript</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
    <p class="read-more">
      <a href="#">Read More</a>
    </p>
  </div>
</div> --}}