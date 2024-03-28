<x-layout>
    <div class="container-fluid justify-content-center w-60 bg-form">
        <img class=" img-fluid  py-5 bg-form" src="/media/lucifer.jpeg" alt="">
    </div>
    
    <div class="container-fluid {{-- vh-100  --}} bg-title">
        <div class="row justify-content-center h-25 bg-form">
            
            <div class="col-12 mb-5">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5">Inserisci La Tua Serie Tv</h1>
            </div>
        </div>
        <div class="container-fluid  p-0 text-center ">
            <div class="row justify-content-center {{-- vh-100  --}}bg-form">
                <div class="col-12 col-md-6 justify-content-center">
                    <form class="rounded py-3 mb-5 fw-bold text-uppercase  font-second" method="POST" action="{{route('movie.submit')}}" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Nome Serie Tv</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                            @error('title')
                            <p class="font-second fw-light text-color">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="director" class="form-label">Regista</label>
                            <input type="text" class="form-control @error ('director') is-invalid @enderror" id="director" aria-describedby="emailHelp" name="director" value="{{old('director')}}">
                            @error('director')
                            <p class="font-second fw-light text-color">{{$message}}</p>
                            @enderror
                            
                        </div>
                        <div class="mb-3">
                            <label for="plot" class="form-label">Recensione Serie Tv</label>
                            <textarea name="plot" id="plot" cols="30" rows="10" class="form-control @error('plot') is-invalid @enderror">{{old('plot')}}</textarea>
                            @error('plot')
                            <p class="font-second fw-light text-color">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class=" container-fluid mb-3  h-100">
                            <label for="poster" class="form-label">Immagine Della Serie Tv</label>
                            <input type="file" class="form-control @error('poster') is-invalid @enderror" name="poster" id="poster">
                            @error('poster')
                            <p class="font-second fw-light text-color">{{$message}}</p>
                            @enderror
                        </div>
                        
                        
                        <div class="mb-3 mt-5">
                            @foreach($categories as $category)
                            
                            <input type="checkbox" value="{{ $category->id }}" name="categories[]" class="form-check-input" id="{{'category-' . $category->name}}">
                            <label class="form-check-label" for="{{'category-' . $category->name}}">{{ $category->name }}</label>
                            @endforeach
                          
                        </div>
                        
                        <button type="submit" class="btn btn-success rounded-circle text-color text-uppercase mt-2">Inserisci Serie Tv</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>