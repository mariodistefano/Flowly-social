<x-layout>
    <x-header 
        title="Tutti gli Articoli"
    />
    <div class="scrolling-wrapper px-5 pt-5">
        @foreach ($articles as $article)
    <x-CardScroll
    :article=$article
    />
          @endforeach
    </div>
    <div class="container my-3">
        <div class="row mx-5">
                @if ($articles->isNotEmpty())
                    @foreach ($articles as $article)
                            <x-article-card
                                :article="$article"
                            />
                    @endforeach
                @endif
        </div>
    </div>
<div class="cerchioSF"></div>
    
</x-layout>