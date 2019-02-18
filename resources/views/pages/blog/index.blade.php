@extends('layouts.app')

@section('title', 'SELEMAT JALAN | Recente posts')


@section('content')
<main class="py-5">
  <div style="margin:0% 10% 5% 10%;">
    <h2 class="text-center"><small>Recente posts</small></h2>
  </div>
    @if(count($posts)> 0)
      @foreach($posts as $post)
      <div class="mx-auto" style="width:50%;">
         <div class="jumbotron text-center">
          <h3 ><a href="/pages/blog/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Geplaatst op {{$post->created_at}}</small>
        </div></div>
       
  
      @endforeach
      {{$posts->links()}}
    @else
      <p>Geen posts aangetroffen!</p>
    @endif
  </main>

@endsection