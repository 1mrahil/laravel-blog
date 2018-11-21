@extends('layouts.app')

@section ('title')

  Post wijzigen

@endsection

@section('content')
<main class="my-5">
    <h1 style="margin-left: 10%;">Post aanpassen</h1><br>
    {!!Form::open(['action'=> ['BlogController@update', $post->id], 'method' => 'POST'])!!}
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('title', 'Titel')}}<br>
            {{Form::text('title', $post->title, ['class' =>''])}}
        </div>
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('body', 'Tekst')}}<br>
            {{Form::textarea('body', $post->body, ['class' =>''])}}<br>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Wijzig', ['class' => 'btn btn-primary my-5'])}}
        </div>
        
    {!! Form::close() !!}
</main>
    
@endsection
  