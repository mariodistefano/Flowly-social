<x-layout>
    <x-header 
        title="Tutti gli Articoli"
    />

    <div class="container my-3">
        <div class="row">
                @if ($articles->isNotEmpty())
                    @foreach ($articles as $article)
                            <x-article-card
                                :article="$article"
                            />
                    @endforeach
                @endif
        </div>
    </div>
    
</x-layout>