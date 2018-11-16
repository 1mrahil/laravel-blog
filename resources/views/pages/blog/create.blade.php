@extends('layouts.app')

@section ('title')

  Plaats een post

@endsection

@section('content')
<main class="py-4">
    <h1 style="margin-left:10%;">Plaats een post</h1><br>
    {{ csrf_field() }}
    {!!Form::open(['action'=> 'BlogController@store', 'method' => 'POST'])!!}
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('title', 'Titel')}}<br>
            {{Form::text('title', '', ['class' =>'', 'placeholder' => 'Titel'])}}
        </div>
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('body', 'Tekst')}}<br>
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' =>'form-control', 'placeholder' => 'Tekst'])}}
            {{Form::submit('Plaatsen', ['class' => 'btn btn-primary float-left mt-5 mb-5' ])}}
        </div>
        
        

    {!! Form::close() !!}
</main>

    
@endsection

 