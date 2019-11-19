@extends('layout')

@section('title')
    Home
@endsection

@section('content')

    <ul>
        @foreach($posts as $post)
        <li>{{$post}}</li>
        @endforeach
    </ul>
    
    <h1>My Home {{$food}}</h1>

@endsection