<x-layout>
  {{-- spinner --}}
  <div class="loader"></div>

  {{-- error message --}}
  @if (session('message'))
    <div class="alert alert-info text-center">
      {{session('message')}}
    </div>
  @endif

  <div class="container-fluid">
    <div class="header">
      <div>
        <h1 class="text-white text-center mt-5 display-1">"The FooL"</h1>
        <h2 class="text-white text-center mt-5"> Facts of ours Lives </h2>
      </div>
      <div class="info">
        <p href="" target="_b" class="author"></p>
        <h4><a href="#category">DESIGN by</a></h4>
            <p class="mx-0">
              <a href="" target="_b" class="underlineTitol">4 RunAway From Home</a> on March 11, 2023
            </p>
            <p>...</p>
      </div>
    </div>
  </div>

  <x-header
    title="Mi sono sminchiato totale ... tutta la notte davanti a sto coso...ma io barcollo ma non mollo !!!!!!! xD"
   />

     {{-- barra meteo --}}
  <div class="meteo">
    <div id="ww_6971ad2a075c4" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl2405"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"rgba(96,189,233,0)","cl_font":"#FFFFFF","cl_cloud":"rgba(255,255,255,0.86)","cl_persp":"rgba(129,212,250,0.85)","cl_sun":"rgba(255,193,7,0.85)","cl_moon":"rgba(255,193,7,0.85)","cl_thund":"#FF5722","el_phw":3,"el_whr":3}'>Weather Data Source: <a href="https://meteolongue.com/rome_meteo_25_jours/" id="ww_6971ad2a075c4_u" target="_blank">Rome meteo 25 jours</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_6971ad2a075c4"></script>
  </div>

  <h1 class="text-center fs-1">Last Fact</h1>

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
  <div class="my-3 container light py-4">
    <div class="row">
        @if ($articles->isNotEmpty())
          <div class="col-12">
            @foreach ($articles as $article)
              <x-article-card
                :article="$article"
              />
            @endforeach
          </div>
        @endif
    </div>
  </div>

{{-- footer --}}
<x-footer/>

 
</x-layout>