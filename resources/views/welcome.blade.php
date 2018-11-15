@extends('layouts.app')

@section ('content')

   <div><p>Begin je reis <a href="">hier</a></p></div>

@endsection

<style>
    body{
        width: 100%;
        height: 100%;   
        background: url("{{ asset('img/landing.jpeg') }}") no-repeat center / cover;
    }
</style>