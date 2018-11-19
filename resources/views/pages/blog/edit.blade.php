@extends('layouts.app')

@section ('title')

  Post wijzigen

@endsection

@section('content')
<main class="py-4">
    <h1>Post aanpassen</h1><br>
    {{ csrf_field() }}
    {!!Form::open(['action'=> ['BlogController@update', $post->id], 'method' => 'POST'])!!}
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('title', 'Titel')}}<br>
            {{Form::text('title', $post->title, ['class' =>''])}}
        </div>
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('body', 'Tekst')}}<br>
            {{Form::textarea('body', $post->body, ['class' =>''])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Wijzig', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</main>
    
@endsection
  