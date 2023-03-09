
<header class="container-fluid mb-4">
    <div class="row justify-content-between">
      <h3 class="text-center mt-2 d-md-none d-block  border-bottomMIO">Aulab.post</h3>
      <div class="col-md-6 mt-5">
          <h2 class="benvenuto d-none d-md-block ps-4"> {{$title}}</h2>
          <h6 class="text-secondary ps-4 d-none d-md-block">sfoglia mille e oltre articoli</h6>
      </div>
{{-- <div class="col-2 d-none d-md-block d-flex">     --}}
    @guest
    <div class="col-md-4 d-flex mt-2">
        <button class="btnHEADER d-none d-md-block "><a class="text-white" href="{{route('login')}}"> Accedi</a></button>
        <button class="btnHEADER d-none d-md-block ms-2"><a class="text-white" href="{{route('register')}}"> Registrati</a></button>
    </div>

    @else
    <div class="col-md-6 d-flex mt-3">
        <button class="ms-auto btnHEADER d-none d-md-block  mb-md-5 me-md-3"><a class="text-black" href="{{route('article.create')}}">Crea Articolo</a></button>
        <button class="btnHEADER d-none d-md-block  mb-md-5 me-md-3"><a class="text-black" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" href="{{route('logout')}} ">Logout</a></button>
        <button class="btnLINGUA d-none d-md-block  mb-md-5 me-md-3">IT</button>
    </div>

    @endguest
<!-- </div> -->
{{-- </div> --}}
  
</header> 



