<x-layout>
    <x-header
        title="Lavoro con noi!"
    />

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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h2>Lavora come amministratore</h2>
                <p>Cosa farai: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae exercitationem earum animi, fugiat at delectus cumque placeat minus a suscipit excepturi explicabo, aspernatur, quaerat numquam? Nihil minus rem blanditiis ipsa.</p>
                <h2>Lavora come revisore</h2>
                <p>Cosa farai:Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quis natus dolorum sunt consectetur sequi numquam quo, earum facilis sint magni dolore explicabo amet ea distinctio delectus veniam deserunt. Tenetur!</p>
                <h2>Lavora come redattore</h2>
                <p>Cosa farai:Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio fugiat omnis itaque asperiores architecto ea modi ipsam, ex sint praesentium voluptates fugit provident ut voluptatum commodi quos minus. Omnis, velit?</p>
                

            </div>

            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('careers.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="from-label">Per quale ruolo ti stai candidando?</label>
                      <select name="role" id="role" class="form-control">
                        <option value=""></option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message">Parlaci di te</label>
                        <textarea name="message" cols="30" rows="7" class="form-control" id="message" >{{old('message')}}</textarea>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary">Invia candidatura</button>
                    </div>
                   
                </form>
            </div>
            
        </div>
    </div>

</x-layout>