@extends('layouts.app')
@section ('title')

{{$post->title}}

@endsection


@section('content')
<main class="py-4">
  <h3 class="m-5">{{$post->title}}</h3>
  <div class="mx-auto" style="width: 50%;">
      <hr>
      <small>Geplaatst op {{$post->created_at}}</small>
      <hr>
        <div>
       {!!$post->body!!}<br><br>
        </div>
        <div>
       <a href="/pages/blog/{{$post->id}}/edit" class="btn btn-primary">Wijzig</a>
       {!!Form::open(['action' => ['BlogController@destroy', $post->id], 'method' =>'POST', 'class' => 'float-right'])!!}
       {{Form::hidden('_method', 'DELETE')}} 
       {{Form::submit('Verwijderen', ['class' =>'btn btn-danger'])}}
       {!! Form::close() !!}
      </div>
</main>


  
@endsection  
  