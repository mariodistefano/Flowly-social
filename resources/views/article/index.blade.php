<x-layout>
    
    <x-waves/>
    {{-- h1 tra le onde --}}
    <div class="waveTitol">
        <h1 class="display-3 text-white sdnotshow">"Facts of life"</h1>
    </div>

    <div class="container-fluid">
        <x-header
        title="... è notte fonda e sono sveglio e voi dormite lossò... con la bolla al naso... vi odio tutti...io odio il mondo!!!"
      />
  
      <div class="meteo2">
         <div id="ww_6971ad2a075c4" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl2405"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"rgba(96,189,233,0)","cl_font":"#FFFFFF","cl_cloud":"rgba(255,255,255,0.86)","cl_persp":"rgba(129,212,250,0.85)","cl_sun":"rgba(255,193,7,0.85)","cl_moon":"rgba(255,193,7,0.85)","cl_thund":"#FF5722","el_phw":3,"el_whr":3}'>Weather Data Source: <a href="https://meteolongue.com/rome_meteo_25_jours/" id="ww_6971ad2a075c4_u" target="_blank">Rome meteo 25 jours</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_6971ad2a075c4"></script>
      </div>
  
      <div class="container mt-1">
          <div class="row">
              <div class="col-12">
                  <h2 class="text-secondary">Categories</h2>
              </div>
          </div>
      </div>
          
      {{-- card categorie --}}
      <div class="container light py-4">
          <div class="row">
              @foreach ($categories as $category)
                  <x-card-scroll 
                      :category="$category"
                  />
              @endforeach
          </div>
      </div>
  
      <div class="container mt-1">
          <div class="row">
              <div class="col-12">
                  <h2 class="text-secondary">Articles</h2>
              </div>
          </div>
      </div>
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
    </div>
    
</x-layout>