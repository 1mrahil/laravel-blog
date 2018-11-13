@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
@endif 

@if(session('succes'))
    <div class="alert alert-primary" role="alert">
        {{session('succes')}}
    </div> 
@endif

@if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div> 
@endif

