<x-layout>

    <x-waves/>

    <x-header
      title="Welcome to your Admin-Dashbord {{Auth::user()->name}}"
    />
    
    @if (session('message'))
        <div class="alert alert-info text-center">
            {{session('message')}}
        </div>
    @endif

    {{-- SNIPPED DEGLI ERRORI ????  --}}
    <div class="col-12 col-md-6">
        @if ($errors->any())
        <div class="alert alert-info">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
            
        @endif
    </div>
    
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Applications for the role of Administrator</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Applications for the role of Revisor</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Applications for the role of Author</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
    </div>

    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">tags</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Category</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie" />

                <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="write here your new Category">
                    <button type="submit" class="btn btn-info text-white btn-radius">Add</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>