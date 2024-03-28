<x-layout>
    <div class="container-fluid justify-content-center w-60 bg-form">
        <img class=" img-fluid  py-5 bg-form" src="/media/the boys.jpeg" alt="">
    </div>
    
    <div class="container-fluid vh-100  bg-title">
        <div class="row justify-content-center h-25">
           
            <div class="col-12 mb-5">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5">Tutte Le Categorie delle Serie Tv! </h1>

            </div>
            <div class="row justify-content-center py-5">
                @foreach ($categories as $category)
                    <div class="col-12 col-md-4">
                        <div class="col-12 col-md-3 mb-3 py-5">
                            <div class="card" style="width: 18rem;">
                                
                                    
                                
                                <div class="card-body fw-light font-second bg-card">
                                  <h5 class="card-title">{{($category->name)}}</h5>
                                  {{-- <p class="card-text">{{($categoty->description)}}</p> --}}
                                  @auth
                                  <form action="{{route('category.delete',compact('category'))}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-success">Cancella La Categoria</button>
                                
                                </form>
                                 
                                  <a href="{{route('category.edit',compact('category'))}}" class="btn btn-success">Modifica Categoria</a>
                                  @endauth
                                  <a href="{{route('category.show',compact('category'))}}" class="btn btn-success">Dettaglio</a>
                                </div>
                              </div>
            
                        </div>
                    </div>
                @endforeach
            </div>
        
       </div>
    </div>
</x-layout>