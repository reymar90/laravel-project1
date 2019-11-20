@extends('layout')

@section('content')
        
    <h1>Projects</h1>

    <ul style="list-style-type:none">
            @foreach ($users as $user)
            <li>{{$user->id}} - {{$user->first_name}} - {{$user->last_name}}</li>
            @endforeach
    </ul>



@endsection