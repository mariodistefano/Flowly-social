<table class="table table-striped table-hover border">
    <thead class="table-white text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tag name</th>
            <th scope="col">Number of article connected</th>
            <th scope="col">Refresh</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>

    <tbody>

        @foreach($metaInfos as $metaInfo)
        <tr class="text-center">
            <th scope="row">{{$metaInfo->id}}</th>
            <td>>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>

           @if ($metaType == "tags")
                <td>
                    <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="tag's new name" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-info text-white btn-radius">Refresh</button>
                    </form>
                </td>

                <td>
                    <form action="{{route('admin.deleteTag', ['tag'=> $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-warning text-white btn-radius">Delete</button>
                    </form>
                </td>
            @else
                <td>
                    <form action="{{route('admin.editCategory', ['category'=> $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="Category's new name" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-info text-white btn-radius">Refresh</button>
                    </form>
                </td>
                
                <td>
                    <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-warning text-white btn-radius">Delete</button>
                    </form>
                </td> 
            @endif    
        </tr>
        @endforeach
    </tbody>
</table>