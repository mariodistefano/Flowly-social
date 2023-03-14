<x-layout>

    <x-waves/>

    <x-header
      title="Welcome to your Author-Dashbord {{Auth::user()->name}}"
    />

    @if (session('message'))
        <div class="alert alert-info text-center">
            {{session('message')}}
        </div>
    @endif
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Articles to review</h2>
                <x-writer-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Articles to publish</h2>
                <x-writer-articles-table :articles="$acceptedArticles" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Articles rejected</h2>
                <x-writer-articles-table :articles="$rejectedArticles" />
            </div>
        </div>
    </div>
</x-layout>