<form method="post" action="{{route('comment.store')}}" enctype="multipart/form-data" class="card p-5 shadow"> 
    @csrf

    <div class="mb-3">
        <label class="form-label">Corpo Articolo</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Invia</button>
</form>