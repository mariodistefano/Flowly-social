<table class="table table-striped table-hover border">
    <thead class="table-secondary text-center">
        <tr>
            <th scope="col" style="width: 5%">#</th>
            <th scope="col" style="width: 38%" >Name</th>
            <th scope="col" style="width: 40%">Email</th>
            <th scope="col" style="width: 17%">Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach($roleRequests as $user)
        <tr>
            <th class="text-center" scope="row"> {{$user->id}} </th>
            <td class="text-center">{{$user->name}} </td>
            <td class="text-center">{{substr($user->email, 0 , 15)}} </td>
            <td class="text-center">
                @switch($role)
                    @case('admin')
                        <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn btn-colorPersonal btn-radius">Do {{$role}}</a>
                        @break
                    @case('revisor')
                        <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn btn-colorPersonal btn-radius">Do {{$role}}</a>
                        @break
                    @case('author')
                        <a href="{{route('admin.setWriter', compact('user'))}}" class="btn btn-colorPersonal btn-radius">Do {{$role}}</a>
                        @break
                    @default
                @endswitch
                {{-- <button class=" btn btn-into text-white">Attiva {{$role}}</button> --}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>