<x-layout>
    <x-header
        title="Crea Articolo"
    />

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          
            <form method="post" action="{{route('article.store')}}" enctype="multipart/form-data" class="card p-5 shadow"> 
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control" name="subtitle" value="{{old('subtitle')}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="img">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Categorie</label>
                        <select name="category" class="form-control text-capitalize" id="">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Corpo Articolo</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
        </div>
    </div>
</div>

</x-layout>