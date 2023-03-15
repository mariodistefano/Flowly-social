<x-layout>
    <x-waves/>

    <div class="col-12 col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
            
        @endif
    </div>
    
    <x-dashboard-search />

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-secondary">
                <h2>Work as Administrator</h2>
                <p>What will you do: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae exercitationem earum animi, fugiat at delectus cumque placeat minus a suscipit excepturi explicabo, aspernatur, quaerat numquam? Nihil minus rem blanditiis ipsa.</p>
                <h2>Work as Revisor</h2>
                <p>What will you do:Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quis natus dolorum sunt consectetur sequi numquam quo, earum facilis sint magni dolore explicabo amet ea distinctio delectus veniam deserunt. Tenetur!</p>
                <h2>Work as Redactor</h2>
                <p>What will you do:Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio fugiat omnis itaque asperiores architecto ea modi ipsam, ex sint praesentium voluptates fugit provident ut voluptatum commodi quos minus. Omnis, velit?</p>
            </div>

            <div class="col-12 col-md-8 col-lg-6 text-secondary">
                <form method="POST" action="{{route('careers.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="from-label">What role you're running for?</label>
                      <select name="role" id="role" class="form-control ">
                        <option value=""></option>
                        <option value="admin">Administrator</option>
                        <option value="revisor">Revisor</option>
                        <option value="writer">Author</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message">About you</label>
                        <textarea name="message" cols="30" rows="7" class="form-control" id="message" >{{old('message')}}</textarea>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-secondary mb-5">Send your application</button>
                    </div>
                   
                </form>
            </div>
            
        </div>
    </div>

    <x-footer />

</x-layout>