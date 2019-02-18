@extends('layouts.app')

@section('title', 'SELEMAT JALAN | Neem contact op')


@section('content')
<main class="py-5">
    <h1 style="margin: 0% 10%;">Laat een bericht achter</h1><br>
    @csrf
    {!!Form::open(['action'=> 'ContactUsController@contactUsPost', 'method' => 'POST'])!!}
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('name', 'Naam')}}<br>
            {{Form::text('name', '', ['class' =>'', 'placeholder' => 'Naam'])}}
        </div>
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('email', 'Email')}}<br>
            {{Form::text('email', '', ['class' =>'', 'placeholder' => 'voorbeeld@voorbeeld.com'])}}
        </div>
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('message', 'Tekst')}}<br>
            {{Form::textarea('message', '', ['id' => 'article-ckeditor', 'class' =>'form-control', 'placeholder' => 'Tekst'])}}
        </div>
        <div style="margin-left: 10%;">{{Form::submit('Verstuur', ['class' => 'btn btn-primary' ])}}</div>
        

    {!! Form::close() !!}
</main>
    

@endsection