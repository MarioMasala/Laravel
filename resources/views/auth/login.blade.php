<x-layout>
    <img class=" img-fluid w-100" src="/media/serietv.jpeg" alt="">
    <div class="container-fluid vh-100  bg-title">
        
        <div class="row justify-content-center h-25">
           
            <div class="col-12 mb-5">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5">Accedi Alla Tua Area Riservata</h1>
            </div>
        </div>
       <div class="container-fluid  p-0">
        <div class="row justify-content-center vh-100 bg-form">
           @if ($errors->any())
           <div class="alert-alert-danger fw-bold text-uppercase text-color">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    
                @endforeach
            </ul>
           </div>
           @endif

            <div class="col-12 col-md-6 ">
                <form class="rounded py-3 mb-5 fw-bold text-uppercase  font-second" method="POST" action="{{route('login')}}" >

                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">La Tua E-Mail</label>
                        <input type="email" class="form-control " id="title" name="email" value="">
                        
                    </div>
                    
                    <div class="mb-3">
                      <label for="director" class="form-label">La Tua Password</label>
                      <input type="password" class="form-control " id="director" aria-describedby="emailHelp" name="password" value="">
                      
                      
                    </div>
                  
                    
                    <button type="submit" class="btn btn-success rounded-circle text-color text-uppercase">Accedi Alla Tua Area</button>
                  </form>
            </div>
        </div>
       </div>
       </div>
    </div>
</x-layout>