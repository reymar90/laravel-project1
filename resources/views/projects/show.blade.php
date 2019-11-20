@extends('layout')


@section('content')
    

    <h1 class="title">{{$project->title}}</h1>
    <div class="content">{{$project->description}}</div>

    {{-- <div>
    <button type="button" class="btn btn-info"><a href="/projects/{{$projects->id}}"></a> Edit</button>
        <button type="button" class="btn btn-light">Delete</button>
    </div> --}}


@endsection