<x-layout>

    <x-waves/>

    <x-dashboard-search />
    
    <x-header
      title="Welcome to your Admin-Dashbord {{Auth::user()->name}}"
    />
    
    @if (session('message'))
        <div class="alert alert-info text-center">
            {{session('message')}}
        </div>
    @endif

    {{-- SNIPPED DEGLI ERRORI ????  --}}
    <div class="col-10 col-md-6">
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
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Applications for Administrator</h2>
                <x-requests-table :roleRequests="$adminRequests" role="admin" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Applications for Revisor</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisor" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-secondary">Applications for Author</h2>
                <x-requests-table :roleRequests="$writerRequests" role="author" />
            </div>
        </div>
    </div>

    <hr>
    <div class="container mt-4">
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
                <form class="d-flex my-3" action="{{route('admin.storeCategory')}}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="write here your new Category">
                    <button type="submit" class="btn btn-secondary text-white btn-radius">Add</button>
                </form>
                <x-metainfo-table :metaInfos="$categories" metaType="categories" />
            </div>
        </div>
    </div>
    
</x-layout>