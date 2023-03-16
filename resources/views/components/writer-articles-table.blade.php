<table class="table table-striped table-hover border">
    <thead class="table-secondary text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Category</th>
            <th scope="col">Tags</th>
            <th scope="col">Created at</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($articles as $article)
        <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td>{{substr($article->title, 0, 20)}}</td>
            <td>{{substr($article->subtitle, 0, 20)}}</td>
            <td>{{$article->category->name ?? 'Not categorized'}}</td>
            <td>
                @foreach ($article->tags as $tag)
                    {{$tag->name}},
                @endforeach
            </td>
            <td>{{$article->created_at->format('d/m/y')}}</td>
            <td>
                  <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary text-white btn-radius mb-1">Read</a>
                  <a href="{{route('article.edit', compact('article'))}}" class="btn btn-colorPersonal text-white btn-radius mb-1">Update</a>
                  <form class="d-inline" action="{{route('article.destroy', compact('article'))}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-colorPersonal2 btn-radius mb-1"> <i class="fa-solid fa-trash"></i> </button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>