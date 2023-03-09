<table class="table table-striped table-hover border">
    <thead class="table-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Redattore</th>
            <th scope="col">Azioni</th>
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
                  <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi l'articolo</a>
                  <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-info text-white">Accetta l'articolo</a>
                  <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-info text-white">Rifiuta l'articolo</a>
                @else
                  <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn btn-info text-white">Riporta in revisione</a>
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>