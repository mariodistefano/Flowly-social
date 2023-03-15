{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" /> --}}

{{-- card-categorie blu di prima --}}

    {{-- <div class="col-6 col-md-2">
        <div class="card l-bg-blue-dark">
            <div class="card-statistic-3 p-4">
                <a class="text-white" href="{{route('article.byCategory', ['category' => $category->id])}}">
                    <div class="card-icon card-icon-large"><i class="fas fa-users pe-2"></i></div>
                    <div class="mb-4">
                        <h5 class="mb-0 text-white text-start text-bold"> {{$category->name}}</h5>
                    </div>
                </a>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-10 ">
                            <h5 class="text-white mb-0">
                                {{count($category->articles)}} articles
                            </h5>
                        </div>
                    </div>
                    <div class="progress mt-1 " style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
            </div>
        </div>
    </div>
 --}}





 {{-- nuove card-scroll categorie--}}
 {{-- <section class="cards-wrapper rootx"> --}}


 
        <section class="card-grid-space rootx">
            <div class="card-grid-space">
            <a class="card ax backgroundX" href="{{route('article.byCategory', ['category' => $category->id])}}" style="">
                <div>
                <h2>{{$category->name}}</h2>
                <p><small>articles</small></p>
                <div class="date"></div>
                <div class="tags">
                    <div class="tag">{{count($category->articles)}}</div>
                </div>
                </div>
            </a>
            </div>
            {{-- <div class="card-grid-space">
            <a class="card ax" href="https://codetheweb.blog/2017/10/09/basic-types-of-html-tags/" style="--bg-img: url('https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/basic-types-of-html-tags/cover.jpg')">
                <div>
                <h1>Basic types of HTML tags</h1>
                <p>Learn about some of the most common HTML tags…</p>
                <div class="date">9 Oct 2017</div>
                <div class="tags">
                    <div class="tag">HTML</div>
                </div>
                </div>
            </a>
            </div>
            <div class="card-grid-space">
            <a class="card ax" href="https://codetheweb.blog/2017/10/14/links-images-about-file-paths/" style="--bg-img: url('https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/links-images-about-file-paths/cover.jpg')">
                <div>
                <h1>Links, images and about file paths</h1>
                <p>Learn how to use links and images along with file paths…</p>
                <div class="date">14 Oct 2017</div>
                <div class="tags">
                    <div class="tag">HTML</div>
                </div>
                </div>
            </a>
            </div> --}}
            <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
        </section>
  
