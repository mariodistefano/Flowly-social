<table class="table table-striped table-hover border">
    <thead class="table-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Tag</th>
            <th scope="col">Q.ta articolo collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>

    <tbody>

        @foreach($metaInfos as $metaInfo)
        <tr class="text-center">
            <th scope="row">{{$metaInfo->id}}</th>
            <td>>{{$metaInfo->name}}</td>
            <td>{{$metaInfo->articles}}</td>

           @if ($metaType == "tags")
                <td>
                    <form action="">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-info text-white">Aggiorna</button>
                    </form>
                </td>

                <td>
                    <form action="">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger text-white">Elimina</button>
                    </form>
                </td>
            @else
                <td>
                    <form action="">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-info text-white">Aggiorna</button>
                    </form>
                </td>
                
                <td>
                    <form action="">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger text-white">Elimina</button>
                    </form>
                </td> 
            @endif    
        </tr>
        @endforeach
    </tbody>
</table>