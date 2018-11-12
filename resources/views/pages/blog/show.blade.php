@extends('pages.blog.layout.layout')
@section ('title')

{{$post->titel}}

@endsection


@section('content')
<h3>{{$post->titel}}</h3>
  
  <div style="margin: 5% 5%;">
      <hr>
      <small>Geplaatst op {{$post->created_at}}</small>
      <hr>
        <div>
       {{$post->body}}<br><br>
        </div>
        <div>
       {!! Form::open(['action' = ['PostController@destroy', $post->id], 'method' =>'POST' 'class' = 'pull-right')]) !!}
       {{Form::hidden('_method', 'DELETE')}} 
       {{Form::submit('Verwijderen', ['class' =>'btn btn-danger'])}}
       {!! Form::close() !!}
      </div>

  
@endsection  
  