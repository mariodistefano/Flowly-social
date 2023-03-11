<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach($roleRequests as $user)
        <tr>
            <th scope="row"> {{$user->id}} </th>
            <td> {{$user->name}} </td>
            <td> {{$user->email}} </td>
            <td>
                @switch($role)
                    @case('amministratore')
                        <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn btn-info text-white">Activate {{$role}}</a>
                        @break
                    @case('revisore')
                        <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn btn-info text-white">Activate {{$role}}</a>
                        @break
                    @case('redattore')
                        <a href="{{route('admin.setWriter', compact('user'))}}" class="btn btn-info text-white">Activate {{$role}}</a>
                        @break
                    @default
                @endswitch
                {{-- <button class=" btn btn-into text-white">Attiva {{$role}}</button> --}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>