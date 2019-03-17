@extends('layouts.app')

@section('title', 'SELEMAT JALAN | Recente posts')


@section('content')
<main class="pb-5">
  <div>
    <h2 class="pb-5 text-center">Recente posts</h2>
  </div>

    @if(count($posts)> 0)
      @foreach($posts as $post)
      <div class="container">
        <div class="card text-white mb-3 bg-dark">
          <div class="row no-gutters">
            <div class="col-md-4 col-sm-4">
              <img class="card-image img-fluid img-fit" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->cover_image}}">
            </div>
        <div class="col-md-8 col-sm-8">
          <div class="card-body">
            <h3 class="card-title"><a href="/pages/blog/{{$post->id}}">{{$post->title}}</a></h3>
            <small class="card-text text-white text-muted">Geplaatst op {{$post->created_at}}</small>
          </div>
        </div>
        
        </div>
        </div>
      </div>
      
       @endforeach
      {{$posts->links()}}
    @else
      <p class="text-center">Geen posts aangetroffen!</p>
    @endif
    
  </main>

@endsection