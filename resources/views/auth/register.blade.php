<x-layout>
    <x-header
        title="Registrati"
    />


{{-- form giusto --}}

<div class="row h-100 align-items-center min-vh-100 justify-content-center">
  
    <form method="POST" action="{{route('register')}}" id="form" class="col-12 formRegLog col-md-5 px-4">
        @csrf
      <div class="flex-column align-items-center justify-content-center">
        <h3 class="mt-4 text-center">Sing up</h3>
        <p class="text-center text-secondary">create a free account with your email</p>
      </div>
      <div class="px-md-5 p-0">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label ps-3 font-bold">Name</label>
        <input type="text" class="form-control radius" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label ps-3 font-bold">Email </label>
        <input type="email"  class="form-control radius" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label ps-3 font-bold">Password</label>
        <input type="password"  class="form-control radius" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label ps-3 font-bold">Confirmation Password </label>
        <input type="password"  class="form-control radius" id="exampleInputPassword1" name="password_confirmation">
      </div>
      <div class="mb-3 form-check">
        <label class="form-check-label" for="exampleCheck1">Have an account? <a class="font-bold" href="">Log in</a></label>
        <button type="submit" class="btn ms-5 btn-primary">Submit</button>

      </div>
    </div>
    </form>

  </div>

</x-layout>