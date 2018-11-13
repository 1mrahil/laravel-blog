@extends('pages.blog.layout.layout')

@section ('title')

  Plaats een post

@endsection

@section('content')

    <h1 style="margin: 5% 10%;">Plaats een post</h1><br>
    {!!Form::open(['action'=> 'BlogController@store', 'method' => 'POST'])!!}
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('titel', 'Titel')}}<br>
            {{Form::text('titel', '', ['class' =>'', 'placeholder' => 'Titel'])}}
        </div>
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('body', 'Tekst')}}<br>
            {{Form::textarea('body', '', ['class' =>'', 'placeholder' => 'Tekst'])}}
        </div>
        <div style="margin-left: 10%;">{{Form::submit('Plaatsen', ['class' => 'btn btn-primary' ])}}</div>
        

    {!! Form::close() !!}

@endsection

 