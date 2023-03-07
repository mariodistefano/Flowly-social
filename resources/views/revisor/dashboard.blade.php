<x-layout>
    <x-header
        title="Bentornato Revisore"
    />
    
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articolo da revisionare</h2>
                <x-articles-table :articles="$unrevionedArticles" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>RArticolo pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>RArticoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>
</x-layout>