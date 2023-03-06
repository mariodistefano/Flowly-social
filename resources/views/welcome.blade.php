<x-layout>
  <x-header 
    title="Aulab Post"
  />

  @if (session('message'))
    <div class="alert alert-success text-center">
      {{session('message')}}
    </div>
  @endif

  {{-- articoli con scrol --}}
<div class="scrolling-wrapper px-5 pt-5">
  @foreach ($articles as $article)
      <x-CardScroll 
      :article="$article"
      />
  @endforeach
</div>

{{-- card grandi --}}


{{-- <div class="container my-3">
  <div class="row mx-5"> --}}
          @if ($articles->isNotEmpty())
              @foreach ($articles as $article)
                      <x-article-card
                          :article="$article"
                      />
              @endforeach
          @endif
  {{-- </div>
</div> --}}


<div class="cerchioSF"></div>
</x-layout>