<x-layout>
    <x-header
        title="Crea Articolo"
    />

    <div class="container">
        <div class="row justify-content-center">
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
            
                <form method="post" action="{{route('article.store')}}" enctype="multipart/form-data" class="p-5"> 
                    @csrf
                    <div class="mb-3">
                        <label class="form-label text-secondary">Titolo</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Subtitle</label>
                        <input type="text" class="form-control" name="subtitle" value="{{old('subtitle')}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Immagine</label>
                        <input type="file" class="form-control" name="img">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Category</label>
                        <select name="category" class="form-control text-capitalize" id="">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- TAGS --}}
                    <div class="mb-3">
                        <label for="tags" class="form-label text-secondary">Tags:</label>
                        <input name="tags" id="tags" class="form-label" value="{{old('tags')}}">
                        <span class="small fst-italic text-secondary">Separate each tag with a comma</span>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Article</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>