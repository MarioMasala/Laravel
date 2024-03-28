<x-layout>
    <div class="container-fluid justify-content-center w-60 bg-form">
        <img class=" img-fluid  py-5 bg-form" src="/media/the boys.jpeg" alt="">
    </div>
    
    <div class="container-fluid vh-100  bg-form">
        <div class="row justify-content-center h-25 bg-form">
           
            <div class="col-12 mb-5 bg-form">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5">Dettagli Della Categoria : {{$category->name}} </h1>

            </div>
            <div class="row justify-content-center py-5 bg-form">
                <div class="container-fluid">
                    <div class="row col-12-col-md-6">
                        <p class="fw-light font-second text-color">{{$category->description}}</p>
                       
                    </div>
                </div>
            </div>
        
       </div>
    </div>
</x-layout>
