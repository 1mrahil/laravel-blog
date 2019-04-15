@extends('layouts.app')

@section('title', 'SELEMAT JALAN | Neem contact op')


@section('content')
<main class="py-5">
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
</main>
    
@endsection

{{--<div class="container p-5" id="contact-form">
    <h2 class="text-center">Heeft u een vraag?</h2>
 <form method="POST" action="/contacts">
   @csrf
   <fieldset>
     @if (Auth::user())
     <div class="form-group has-warning">
       <div class="form-row">
         <div class="col-sm-6">
           <label class="form-control-label" for="fname">Voornaam*</label>
           <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}">
           <input name="fname" class="form-control form-control-danger" id="fname" type="text" value="{{ Auth::user()->voornaam }}" placeholder="voornaam">
           <small class="text-danger"></small>
         </div>
         <div class="col-sm-6">
           <small class="text-muted float-right">* is verplicht</small>
           <label class="form-control-label" for="lname">Achternaam*</label>
           <input name="lname" class="form-control form-control-danger" id="lname" type="text" value="{{ Auth::user()->achternaam }}" placeholder="achternaam">
           <small class="text-danger"></small>
         </div>
       </div><!-- form-row -->
     </div><!-- form-group has-warning -->
         <div class="form-group has-warning">
           <div class="form-row">
             <div class="col-sm-6">
               <label class="form-control-label" for="email">Email*</label>
               <input class="form-control form-control-danger" id="email" type="email" name="email" value="{{ Auth::user()->email }}" placeholder="emailadres" aria-describedby="emailHelp">
               <small class="form-text text-muted" id="emailHelp">Wij delen uw emailadres niet met anderen</small>
               <small class="text-danger"></small>
             </div>
             <div class="col-sm-6">
               <label class="form-control-label" for="phone">Telefoonnummer*</label>
               <input class="form-control form-control-danger" id="phone" type="tel" name="email" value="{{ Auth::user()->telefoon }}" placeholder="telefoonnummer" aria-describedby="emailHelp">
               <small class="text-danger"></small>
             </div>
           </div><!-- form-row -->
         </div><!-- form-group has-warning -->
         <div class="form-group has-warning">
           <label class="form-control-label" for="onderwerp" name="onderwerp" required>Onderwerp*</label>
           <input class="form-control form-control-danger" name="onderwerp" type="text" placeholder="onderwerp" value="{{ old('onderwerp') }}">
           <small class="text-danger"></small>
         </div>
         <div class="form-group has-warning">
           <label class="form-control-label" for="bericht" name="bericht">Bericht*</label>
           <textarea name="bericht" id="text" cols="30" rows="10" class="form-control form-control-danger" placeholder="laat een bericht achter" required>{{ old('bericht') }}</textarea>
           <small class="text-danger"></small>
         </div>
       @endif
       @if (Auth::guest())
       <div class="form-group has-warning">
         <label class="form-control-label" for="onderwerp" name="onderwerp" required>Onderwerp*</label>
         <input class="form-control form-control-danger" name="onderwerp" type="text" placeholder="onderwerp" value="{{ old('onderwerp') }}">
         <small class="text-danger"></small>
       </div>
       <div class="form-group has-warning">
         <label class="form-control-label" for="bericht" name="bericht">Bericht*</label>
         <textarea name="bericht" id="text" cols="30" rows="10" class="form-control form-control-danger" placeholder="laat een bericht achter" required>{{ old('bericht') }}</textarea>
         <small class="text-danger"></small>
       </div>
     @endif
   </fieldset>
   <button class="btn btn-orange text-light" type="submit">Verstuur</button>
 </form>
 </div><!-- container p-5 -->--}}