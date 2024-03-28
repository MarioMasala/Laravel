<x-layout>
    <div class="container-fluid justify-content-center w-40 bg-form">
        <img class=" img-fluid  py-5 bg-form" src="/media/the boys.jpeg" alt="">
    </div>
    
    <div class="container-fluid  bg-title">
        <div class="row justify-content-center">
           
            <div class="col-12 mb-5">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5">Tutte Le Nostre Serie Tv </h1>
            </div>
        </div>
       <div class="container-fluid  p-0">
        <div class="row justify-content-center vh-100 bg-form mx-auto">
            @foreach ($movies as $movie)
            <div class="container-fluid col-12 col-md-3 justify-content-center mb-3 d-flex mx-auto ">
                <div class="card h-100 mx-auto " style="width:18rem;">
                    <img src="{{Storage::url($movie->poster)}}" class="card-img-top" alt="...">
                    <div class="card-body fw-light font-second">
                      <h5 class="card-title">{{($movie->title)}}</h5>
                      <p class="card-text">{{($movie->plot)}}</p>
                      <a href="#" class="btn btn-primary">Dettaglio</a>
                    </div>
                  </div>

            </div>
            @endforeach
            
        </div>
       </div>
       </div>
    </div>
</x-layout>
 


 