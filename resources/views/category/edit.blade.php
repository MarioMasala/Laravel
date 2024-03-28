<x-layout>
    <div class="container-fluid justify-content-center w-60 bg-form">
        <img class=" img-fluid  py-5 bg-form" src="/media/lucifer.jpeg" alt="">
    </div>
    
    <div class="container-fluid vh-100  bg-title">
        <div class="row justify-content-center h-25 bg-form">
           
            <div class="col-12 mb-5">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5">Modifica La Tua Categoria:{{$category->name}}</h1>
            </div>
        </div>
       <div class="container-fluid  p-0">
        <div class="row justify-content-center vh-100 bg-form">
            <div class="col-12 col-md-6 ">
                <form class="rounded py-3 mb-5 fw-bold text-uppercase  font-second" method="POST" action="{{route('category.update',compact('category'))}}" >

                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nuovo Categoria Serie Tv:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$category->name}}">
                        @error('name')
                        <p class="font-second fw-light text-color">{{$message}}</p>
                        @enderror
                    </div>
                    
            
                      
                    
                    <div class="mb-3">
                      <label for="desciption" class="form-label">Nuova Descrizione Serie Tv:</label>
                      <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{($category->description)}}</textarea>
                      @error('description')
                      <p class="font-second fw-light text-color">{{$message}}</p> 
                        @enderror
                    </div>
                   
                    
                    
                    <button type="submit" class="btn btn-success rounded-circle text-color text-uppercase">Modifica Serie Tv</button>
                  </form>
            </div>
        </div>
       </div>
       </div>
    </div>
</x-layout>