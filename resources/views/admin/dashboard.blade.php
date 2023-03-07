<x-layout>
    <x-header
    title="Bentornato Amministratore"
    
    />
    
    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste del ruolo di Amministratore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste del ruolo di Revisore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste del ruolo di Redattore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
                </div>
            </div>
        </div>
</x-layout>