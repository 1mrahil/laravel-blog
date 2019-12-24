@extends('layouts.app')
@section ('title')

SELAMAT JALAN | {{$post->title}}

@endsection


@section('content')
<main class="py-5 mt-5">
  
  <div class="mx-auto" style="width: 50%;">
    <h3 class="pb-5 text-center">{{$post->title}}</h3>
    <img class="img-fluid w-100" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->cover_image}}">
      <hr>
      <small>Geplaatst door {{$post->user->name}} op {{$post->created_at}}</small>
      <hr>
        <div class="pb-5">
       {!!$post->body!!}
        </div>
    <div>
      @auth
       <a href="/pages/blog/{{$post->id}}/edit" class="btn btn-secondary">Wijzig</a>
       <button class="btn btn-danger float-right" data-catid="{{$post->id}}"  data-toggle="modal" data-target="#delete-modal">Verwijderen</button>
      
          <!-- Modal -->
          <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Bevestig verwijderen post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <form method="POST" action="/pages/blog/{{ $post->id }}" enctype="multipart/form-data" file="true">
                      @csrf
                      @method('DELETE')
                      
                      <div class="modal-body">
                        <p>
                          Weet je zeker dat je deze post wil verwijderen?
                        </p>
                        
                        <input type="hidden" name="post_id" id="post_id" value="">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-danger" >Verwijderen</button>
                      </div>
                     </form>
                    
                  </div>
                </div>
              </div>
       @endauth
    </div>
  </div>

   
  
</main>

{{-- <form method="POST" action="/pages/blog/{{ $post->id }}" class="float-right" enctype="multipart/form-data" file="true">
        @csrf
        @method('DELETE')
        
            <button class="btn btn-outline-danger" type="submit" data-toggle="modal" data-target="#delete-modal">Verwijderen</button>
      
       </form> --}}
  
@endsection  
  