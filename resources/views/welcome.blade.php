<x-layout>
    <img class=" img-fluid w-100" src="/media/serietv.jpeg" alt="">
    
    <div class="container-fluid vh-100  bg-title">
        
        <div class="row justify-content-center h-25">
            
            <div class="col-12 mb-5">
                <h1 class="text-center text-uppercase fs-1 fw-bold font-title text-color mt-5">Il Nostro Blog Sulle Serie Tv!</h1>
            </div>
        </div>
       <div class="container-fluid  p-0">
        <div class="row justify-content-center vh-100 bg-form">
            <div class="col-12 col-md-6 ">
                <form class="rounded py-3 mb-5 fw-bold text-uppercase  font-second" method="POST" action="{{ route('contact.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Il Tuo Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">La Tua E-Mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      
                    </div>
                    <div class="mb-3">
                      <label for="messagge" class="form-label">Il Tuo Messaggio</label>
                      <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-success rounded-circle text-color text-uppercase">Contattaci</button>
                  </form>
            </div>
        </div>
       </div>
       </div>
    </div>
    
</x-layout>