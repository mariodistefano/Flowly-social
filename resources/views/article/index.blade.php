<x-layout>
    
    <x-waves/>

    <x-header
    title="... è notte fonda e sono sveglio e voi dormite lossò... con la bolla al naso...<br> vi odio tutti...io odio il mondo!!!"
    />

    {{-- <div class="scrolling-wrapper px-3 pt-1 mb-5"> --}}
        
    {{-- card categorie --}}
    <div class="container light py-5">
        <div class="row ">
            @foreach ($categories as $category)
                <x-card-scroll 
                    :category="$category"
                />
            @endforeach
        </div>
    </div>
    {{-- card articoli --}}
    @if ($articles->isNotEmpty())
        @foreach ($articles as $article)
            <x-article-card
                :article="$article"
            />
        @endforeach
    @endif
</x-layout>