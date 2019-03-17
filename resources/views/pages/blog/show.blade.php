@extends('layouts.app')
@section ('title')

SELAMAT JALAN | {{$post->title}}

@endsection


@section('content')
<main class="py-4">
  
  <div class="mx-auto" style="width: 50%;">
    <h3 class="py-5">{{$post->title}}</h3>
    <img class="img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->cover_image}}">
      <hr>
      <small>Geplaatst door {{$post->user->name}} op {{$post->created_at}}</small>
      <hr>
        <div>
       {!!$post->body!!}<br><br>
        </div>
        <div>
      @auth
       <a href="/pages/blog/{{$post->id}}/edit" class="btn btn-primary">Wijzig</a>
       {!!Form::open(['action' => ['BlogController@destroy', $post->id], 'method' =>'POST', 'class' => 'float-right'])!!}
       {{Form::hidden('_method', 'DELETE')}} 
       {{Form::submit('Verwijderen', ['class' =>'btn btn-danger'])}}
       {!! Form::close() !!}
      </div>
      @endauth
</main>


  
@endsection  
  