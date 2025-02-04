<x-layout>
  
  
  
  
  {{-- <div class="container-fluid"> --}}
    {{-- <div class="header">
      <div>
        <h1 class="text-white text-center mt-5 display-1">"The FooL"</h1>
        <h2 class="text-white text-center mt-5"> Facts of ours Lives </h2>
      </div>
      <div class="info">
        <p href="" target="_b" class="author"></p>
        <h6><a href="#category">DESIGN by</a></h6>
        <p class="mx-0">
          <a href="" target="_b" class="underlineTitol">4 RunAway From Home</a> on March 11, 2023
        </p>
        <p>...</p>
      </div>
    </div> --}}
    {{-- </div> --}}
    <!--Hey! This is the original version
      of Simple CSS Waves-->
      
      <div class="header gradient-animato">
        
        <!--Content before waves-->
        <div class="inner-header flex">
          <div class="mt-5">
            <h1 id="intestazione-header" class="text-light">Flowly</h1>
            <h2 id="sottointestazione-header" class="text-light">"Follow the FLOW of your ideas"</h2>
            <div class="mt-5">
              <p href="" target="_b" class="author"></p>
              <h6>DESIGN by</h6>
              <p class="mx-0">
                <a href="https://linktr.ee/htmlheroes" target="_b" class="underlineTitol text-white">HTML Heroes</a> on March 11, 2023
              </p>
            </div>
          </div>
          
        </div>
        
        
        
        <!--Waves Container-->
        <div>
          <svg class="waves2" 
          viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(235, 235, 239)" />
          </g>
        </svg>
      </div>
      <!--Waves end-->
      
    </div>
    <!--Header ends-->
    
    {{-- error message --}}
    @if (session('message'))
    <div class="alert alert-info text-center">
      {{session('message')}}
    </div>
    @endif
    
    <x-dashboard-search />
    
    <x-search />
    
    <x-header
    title="Explore our wide range of articles covering everything from technology to lifestyle and find the information you need to enrich your life."
    />
    
    {{-- barra meteo --}}
    <div class="meteo">
      <div id="ww_6971ad2a075c4" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl2405"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"rgba(96,189,233,0)","cl_font":"#FFFFFF","cl_cloud":"rgba(255,255,255,0.86)","cl_persp":"rgba(129,212,250,0.85)","cl_sun":"rgba(255,193,7,0.85)","cl_moon":"rgba(255,193,7,0.85)","cl_thund":"#FF5722","el_phw":3,"el_whr":3}'>Weather Data Source: <a href="https://meteolongue.com/rome_meteo_25_jours/" id="ww_6971ad2a075c4_u" target="_blank">Rome meteo 25 jours</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_6971ad2a075c4"></script>
    </div>
    
    <h1 class="text-center fs-1 mt-5">Last Facts</h1>
    
    {{-- articoli con scrol --}}
    {{-- <div class="scrolling-wrapper px-3 pt-1">
      @foreach ($articles as $article)
      <div class="card position-relative">
        <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
        <img class="card " src="{{Storage::url($article->img)}}" alt="immagine">
        <div class="posizioneCard background d-flex align-items-center pt-5 pe-4 justify-content-center z-index h-100 w-100">
          <h5> <a class="font-card1 text-white font-bold " href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</h5>
          </div>
        </div> 
        @endforeach
      </div> --}}
      
      
      {{-- card grandi --}}
      {{-- card articoli --}}
      <div class="container light py-4">
        <div class="row">
          @if ($articles->isNotEmpty())
          @foreach ($articles as $article)
          @if($loop->odd)
          <div class="col-12">
            <x-article-card
            :article="$article"
            />
          </div>
          @elseif($loop->even)
          <div class="col-12">
            <x-article-card2
            :article="$article"
            />
          </div>
          @endif
          @endforeach
          @endif
        </div>
      </div>
      
      {{-- spinner --}}
      <div class="loader"></div>
      {{-- footer --}}
      <x-footer/>
      
      
    </x-layout>
