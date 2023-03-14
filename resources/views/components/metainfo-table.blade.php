<table class="table table-striped table-hover border">
    <thead class="table-white text-center">
        <tr>
            <th scope="col" style="width: 5%" >#</th>
            <th scope="col" style="width: 35%">Tag<br>name</th>
            <th scope="col" style="width: 5%">N° articles</th>
            <th scope="col" style="width: 50%">Refresh</th>
            <th scope="col" style="width: 5%">Delete</th>
        </tr>
    </thead>

    <tbody>

        @foreach($metaInfos as $metaInfo)
        <tr class="text-center">
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>

           @if ($metaType == "tags")
                <td>
                    <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="tag's new name" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-colorPersonal text-white btn-radius">Up</button>
                    </form>
                </td>

                <td>
                    <form action="{{route('admin.deleteTag', ['tag'=> $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-colorPersonal2 text-white btn-radius">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            @else
                <td>
                    <form action="{{route('admin.editCategory', ['category'=> $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="Category's new name" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-colorPersonal text-white btn-radius">Up</button>
                    </form>
                </td>
                
                <td>
                    <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-colorPersonal2 text-white btn-radius">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td> 
            @endif    
        </tr>
        @endforeach
    </tbody>
</table>