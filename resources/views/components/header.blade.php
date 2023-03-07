
<header class="container-fluid mb-5">
    <div class="row ">
      {{-- <h3 class="text-center mt-2 d-md-none d-block  border-bottomMIO">Aulab.post</h3> --}}
      <div class="col-md-6 mt-2">
          <h4 class=" benvenuto d-none d-md-block ps-4"> {{$title}}</h4>
          {{-- <h6 class="text-secondary ps-4 d-none d-md-block">sfoglia mille e oltre articoli</h6> --}}
      </div>
<!-- <div class="col-2 d-none d-md-block d-flex">    -->
    @guest
    <button class="btnHEADER d-none d-md-block ms-auto mt-3 mb-md-5 me-md-3"><a href="{{route('login')}}"> Accedi</a></button>
    <button class="btnHEADER d-none d-md-block  mt-3 mb-md-5 me-md-3"><a href="{{route('register')}}"> Registrati</a></button>
    @else
    <div class="col-md-6 d-flex mt-3">
        <button class="ms-auto btnHEADER d-none d-md-block  mb-md-5 me-md-3"><a class="text-black" href="{{route('article.create')}}">Crea Articolo</a></button>
        <button class="btnHEADER d-none d-md-block  mb-md-5 me-md-3"><a class="text-black" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" href="{{route('logout')}} ">Logout</a></button>
        <button class="btnLINGUA d-none d-md-block  mb-md-5 me-md-3">IT</button>
    </div>

    @endguest
<!-- </div> -->
</div>
  
</header> 

