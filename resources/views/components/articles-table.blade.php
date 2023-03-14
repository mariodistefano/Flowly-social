<table class="table table-striped table-hover border">
    <thead class="table-secondary text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Redactor</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach($articles as $article)
        <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td>>{{substr($article->title, 0, 20)}}</td>
            <td>{{substr($article->subtitle, 0, 20)}}</td>
            <td>{{$article->user->name}}</td>
            <td>
                @if (is_null($article->is_accepted))
                  <a href="{{route('article.show', compact('article'))}}" class="btn btn-colorPersonal text-white btn-radius mb-1">Read</a>
                  <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-colorPersonal text-white btn-radius mb-1">Accept</a>
                  <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-colorPersonal2 text-white btn-radius">Reject</a>
                @else
                  <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn btn-colorPersonal text-white btn-radius"><-review</a>
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>