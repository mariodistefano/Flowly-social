<table class="table table-striped table-hover border">
    <thead class="table-dark text-center">
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
                  <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Read article</a>
                  <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-info text-white">Accept article</a>
                  <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-info text-white">Reject article</a>
                @else
                  <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn btn-info text-white">Return to review</a>
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>