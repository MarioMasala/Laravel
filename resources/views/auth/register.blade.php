<x-layout>
    <img class=" img-fluid w-100 py-5 bg-form" src="/media/serie tv.png" alt="">
    <div class="container-fluid vh-100  bg-title">
        <div class="row justify-content-center h-25">
           
            <div class="col-12 mb-5">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5">La Tua Registrazione</h1>
            </div>
        </div>
       <div class="container-fluid  p-0">
        <div class="row justify-content-center vh-100 bg-form">
           

            <div class="col-12 col-md-6 ">
                <form class="rounded py-3 mb-5 fw-bold text-uppercase  font-second" method="POST" action="{{route('register')}}" >

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Il Tuo Nome</label>
                        <input type="text" class="form-control " id="title" name="name" value="">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">La Tua E-Mail</label>
                        <input type="email" class="form-control " id="title" name="email" value="">
                    </div>
                    
                    <div class="mb-3">
                      <label for="director" class="form-label">La Tua Password</label>
                      <input type="password" class="form-control " id="director" aria-describedby="emailHelp" name="password" value="">
                    </div>

                    <div class="mb-3">
                        <label for="director" class="form-label">Conferma La Tua Password</label>
                        <input type="password" class="form-control " id="director" aria-describedby="emailHelp" name="password_confirmation" value="">
                      </div>
  
                   s
                  
                    
                    <button type="submit" class="btn btn-success rounded-circle text-color text-uppercase">Registrati Alla Tua Area</button>
                  </form>
            </div>
        </div>
       </div>
       </div>
    </div>
</x-layout>