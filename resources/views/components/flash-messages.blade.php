<div class="row justify-content-center col-12 col-md-6">
    @if (session()->has('successMessage'))
    <div class="col-12-col-md-6 alert alert-success text-center fw-bold  text-uppercase">
        <p>{{session('successMessage')}}</p>
    
@endif

</div>

