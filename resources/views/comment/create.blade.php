<form method="POST" action="{{route('comment.store')}}" enctype="multipart/form-data" class="card p-5 shadow"> 
    @csrf

    <div class="mb-3">
        <label class="form-label">Article</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Send</button>
</form>

{{-- @foreach ($comments as $comment)
<div class="card">
  <a href="{{route('comment.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a>
  <p class="card-text">{{$comment->body}}</p>
  <p class="text-center">data inserimento: {{$comment->created_at->format('d/m/y')}}</p>
</div> 
@endforeach --}}