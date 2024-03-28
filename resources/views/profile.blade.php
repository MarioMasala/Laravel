<x-layout>
    <img class=" img-fluid w-100" src="/media/serietv.jpeg" alt="">
    
    <div class="container-fluid vh-100  bg-title">
        
        <div class="row justify-content-center h-25">
            
            <div class="container-fluid col-12 mb-5">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5"> Profilo {{Auth::user()->name}}</h1>
                
                <form action="{{route('user.delete')}}" method="POST" class=" text-center py-5 mt-5">
                 @csrf
                 @method('DELETE')

                <button type="submit" class="btn btn-success rounded-circle text-color text-center text-uppercase">Cancella Il Tuo Profilo</button>


                </form>
                

            </div>
            <div class="row justify-content-center py-4">
                
            </div>
        </div>
        
    </div>
    
    
</x-layout>