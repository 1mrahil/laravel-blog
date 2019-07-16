@extends('layouts.app')
@section ('title')

SELAMAT JALAN | {{$post->title}}

@endsection


@section('content')
<main>
  
  <div class="mx-auto" style="width: 50%;">
    <h3 class="pb-5">{{$post->title}}</h3>
    <img class="img-fluid w-100" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->cover_image}}">
      <hr>
      <small>Geplaatst door {{$post->user->name}} op {{$post->created_at}}</small>
      <hr>
        <div class="pb-5">
       {!!$post->body!!}
        </div>
    <div class="pb-5">
      @auth
       <a href="/pages/blog/{{$post->id}}/edit" class="btn btn-outline-dark">Wijzig</a>
       
       <form method="POST" action="/pages/blog/{{ $post->id }}" class="float-right" enctype="multipart/form-data" file="true">
        @method('DELETE')
        @csrf
            <button class="btn btn-outline-danger" type="submit">Verwijderen</button>
      
       </form>
       @endauth
    </div>
       {{-- {!!Form::open(['action' => ['BlogController@destroy', $post->id], 'method' =>'POST', 'class' => 'float-right'])!!}
       {{Form::hidden('_method', 'DELETE')}} 
       {{Form::submit('Verwijderen', ['class' =>'btn btn-danger'])}}
       {!! Form::close() !!} --}}
   </div>
      
</main>


  
@endsection  
  