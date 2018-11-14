@extends('pages.blog.layout.layout')
@section ('title')

{{$post->title}}

@endsection


@section('content')
<h3>{{$post->title}}</h3>
  <div>
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

  
@endsection  
  