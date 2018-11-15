@extends('layouts.app')
<style>
    i{
        margin-top: 0.2em;
    }
  
    .hero-image{
        width: 100%;
        height: 100%;   
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("{{ asset('img/landing.jpeg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .hero-text{
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color:white;
    }
</style>

@section ('content')



    <div class="hero-image">
            <div class="hero-text">
                <h1>Begin je reis <a href="/pages/blog">hier</a></h1>
            </div>
    </div>


@endsection

