@extends('layouts.app')

@section('title', 'SELEMAT JALAN | Neem contact op')


@section('content')

<div class="container p-5">
    <h2 class="text-center pb-5">Heeft u een vraag?</h2>
 <form method="POST" action="/pages/blog/contact">
   @csrf
   <fieldset>
     <div class="form-group has-warning">
       <div class="form-row">
         <div class="col-sm-12">
           <label class="form-control-label" for="name">Naam*</label>
           <input name="name" class="form-control form-control-danger" id="name" type="text" value="{{ old('name') }}" placeholder="naam" required>
           <small class="form-text text-muted" id="emailHelp">*verplicht</small>
           <small class="text-danger"></small>
         </div>
       </div><!-- form-row -->
     </div><!-- form-group has-warning -->
         <div class="form-group has-warning">
           <div class="form-row">
             <div class="col-sm-12">
               <label class="form-control-label" for="email">Email*</label>
               <input class="form-control form-control-danger" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="voorbeeld@voorbeeld.com" aria-describedby="emailHelp" required>
               <small class="form-text text-muted" id="emailHelp">*verplicht, wij delen uw emailadres niet met anderen</small>
               <small class="text-danger"></small>
             </div>
           </div><!-- form-row -->
         </div><!-- form-group has-warning -->
         
         {{-- wordt nog toegevoegd <div class="form-group has-warning">
           <label class="form-control-label" for="subject" name="subject" required>Onderwerp*</label>
           <input class="form-control form-control-danger" name="subject" type="text" placeholder="onderwerp" value="{{ old('subject') }}" required>
           <small class="form-text text-muted" id="emailHelp">*verplicht</small>
           <small class="text-danger"></small>
         </div>--}}
         <div class="form-group has-warning">
           <label class="form-control-label" for="message" name="message">Bericht*</label>
           <textarea name="message" id="text" cols="30" rows="10" class="form-control form-control-danger" placeholder="laat een bericht achter" required>{{ old('message') }}</textarea>
           <small class="form-text text-muted" id="emailHelp">*verplicht</small>
           <small class="text-danger"></small>
         </div>
   </fieldset>
   <button class="btn btn-primary text-white" type="submit">Verzenden</button>
 </form>
 </div><!-- container p-5 -->

{{--<main class="py-5">
    <h1 style="margin: 0% 10%;">Laat een bericht achter</h1><br>
    @csrf
    {!!Form::open(['action'=> 'ContactUsController@contactUsPost', 'method' => 'POST'])!!}
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('name', 'Naam')}}<br>
            {{Form::text('name', '', ['class' =>'col-sm-12', 'placeholder' => 'Naam'])}}
        </div>
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('email', 'Email')}}<br>
            {{Form::text('email', '', ['class' =>'col-sm-12', 'placeholder' => 'voorbeeld@voorbeeld.com'])}}
        </div>
        <div style="display: block; margin: 5% 10%;">
            {{Form::label('message', 'Tekst')}}<br>
            {{Form::textarea('message', '', ['id' => 'article-ckeditor', 'class' =>'form-control', 'placeholder' => 'Tekst'])}}
        </div>
        <div style="margin-left: 10%;">{{Form::submit('Verstuur', ['class' => 'btn btn-primary' ])}}</div>
        

    {!! Form::close() !!}
</main>--}}
    
@endsection

