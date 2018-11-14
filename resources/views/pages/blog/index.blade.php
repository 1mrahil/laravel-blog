@extends('pages.blog.layout.layout')
@section ('title')

  Mijn posts

@endsection

@section('content')
<h1 style=" margin:5% 10%;">Posts</h1>
    @if(count($posts)> 0)
      @foreach($posts as $post)
        <div class="jumbotron text-center" style="display: block; margin: 5% 10%;">
          <h3 ><a href="/pages/blog/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Geplaatst op {{$post->created_at}}</small>
        </div>
  
      @endforeach
      {{$posts->links()}}
    @else
      <p>No posts found!</p>
    @endif
@endsection