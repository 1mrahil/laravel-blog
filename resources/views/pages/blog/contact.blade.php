@extends('layouts.app')

@section('title', 'SELEMAT JALAN | Neem contact op')


@section('content')

<div class="container p-5">
    <h2 class="text-center py-5">Heeft u een vraag?</h2>
 <form method="POST" action="/pages/blog/contact">
   @csrf
   <fieldset>
     <div class="form-group has-warning">
       <div class="form-row">
         <div class="col-sm-12">
           {{-- <label class="form-control-label" for="name">Naam*</label> --}}
           <input name="name" class="form-control form-control-danger" id="name" type="text" value="{{ old('name') }}" placeholder="Naam*" required autofocus>
           <small class="form-text text-muted" id="emailHelp">*verplicht</small>
           <small class="text-danger"></small>
         </div>
       </div><!-- form-row -->
     </div><!-- form-group has-warning -->
         <div class="form-group has-warning">
           <div class="form-row">
             <div class="col-sm-12">
               {{-- <label class="form-control-label" for="email">Email*</label> --}}
               <input class="form-control form-control-danger" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="voorbeeld@voorbeeld.com*" aria-describedby="emailHelp" required>
               <small class="form-text text-muted" id="emailHelp">*verplicht, wij delen uw emailadres niet met anderen</small>
               <small class="text-danger"></small>
             </div>
           </div><!-- form-row -->
         </div><!-- form-group has-warning -->
         
         <div class="form-group has-warning">
           {{-- <label class="form-control-label" for="subject" name="subject" required>Onderwerp*</label> --}}
           <input class="form-control form-control-danger" name="subject" type="text" placeholder="Onderwerp*" value="{{ old('subject') }}" required>
           <small class="form-text text-muted" id="emailHelp">*verplicht</small>
           <small class="text-danger"></small>
         </div>
         <div class="form-group has-warning">
           {{-- <label class="form-control-label" for="message" name="message">Bericht*</label> --}}
           <textarea name="message" id="article-ckeditor" cols="30" rows="10" class="form-control form-control-danger" placeholder="Laat een bericht achter*" required>{{ old('message') }}</textarea>
           <small class="form-text text-muted" id="emailHelp">*verplicht</small>
           <small class="text-danger"></small>
         </div>
   </fieldset>
   <button class="btn btn-secondary" type="submit">Verzenden</button>
 </form>
 </div><!-- container p-5 -->

@endsection

