@extends('layouts.app')

@section('title', 'SELEMAT JALAN | Post plaatsen')


@section('content')
@auth
    <div class="container py-5 mt-5 mb-5">
        <h3 class="pb-5">Nieuwe post</h3>
        <form method="POST" action="/pages/blog" enctype="multipart/form-data" file="true">
            @csrf
            <fieldset>
                <div class="form-group">
                    <label class="form-control-label pb-2" for="title" name="title">Titel</label>
                    <input class="form-control" name="title" type="text" placeholder="Titel" value="{{ old('title') }}" required>
                    <small class="text-danger"></small>
                </div> 
                <div class="form-group">
                    <label class="form-control-label pb-2" for="body">Tekst</label>
                    <textarea name="body" id="article-ckeditor" cols="30" rows="10" class="form-control" placeholder="Tekst" required>{{ old('body') }}</textarea>
                    <small class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="file" class="form-control-file" name="cover_image" aria-describedby="fileHelpId">
                    <small id="fileHelpId" class="form-text text-muted">Kies een afbeelding</small>
                </div>
                <button class="btn btn-primary text-white" type="submit">Plaatsen</button>
            </fieldset>
        </form>
    </div>
@endauth
    
@endsection


 