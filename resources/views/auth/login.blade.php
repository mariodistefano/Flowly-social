<x-layout>
  <x-header
    title="Accedi"
  />

  {{-- form giusto --}}
  <div class="row align-items-center  justify-content-center">
    <form method="POST" action="{{route('login')}}" id="form" class="col-12 formRegLog col-md-5 px-4">
      @csrf
      <div class="flex-column align-items-center justify-content-center">
        <h3 class="mt-4 text-center text-secondary">Sing In</h3>
        <p class="text-center text-secondary">enter with your email</p>
      </div>
      <div class="px-md-5 p-0 pt-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label ps-3 font-bold text-secondary">Email </label>
          <input type="email"  class="border form-control radius" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label ps-3 font-bold text-secondary">Password</label>
          <input type="password"  class="border form-control radius" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
        </div>
        
        <div class="mb-3 form-check p-1">
          <label class="form-check-label text-secondary" for="exampleCheck1">Haven't an account? <a class="font-bold" href="{{route('register')}}">Register</a></label>
          <button type="submit" class="btn ms-5 btn-secondary">Submit</button>
        </div>
      </div>
    </form>
  </div>

</x-layout>