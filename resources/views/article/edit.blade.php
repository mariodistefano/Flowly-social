<x-layout>

    <x-waves/>
    
    <x-dashboard-search />
    
    <x-header
        title="Edit your Article"
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
                        <label class="form-label text-secondary">Title</label>
                        <input type="text" class="form-control"  name="title" id="title" value="{{$article->title}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Subtitle</label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{$article->subtitle}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Image</label>
                        <input type="file" class="form-control" name="img" id="image">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Category</label>
                        <select name="category" class="form-control text-capitalize" id="category">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- TAGS --}}
                    <div class="mb-3">
                        <label for="tags" class="form-label text-secondary">Tags:</label>
                        <input name="tags" id="tags" class="form-control" value="{{$article->tags->implode('name', ', ')}}">
                        <span class="small fst-italic text-secondary">Separate each tag with a comma</span>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-secondary">Article</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Send</button>
                        <p><a class="btn btn-info" href="{{route('homepage')}}">Home</a></p>
                </form>
            </div>
        </div>
    </div>

    <x-footer/>
</x-layout>