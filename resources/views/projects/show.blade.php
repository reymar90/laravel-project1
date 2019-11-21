@extends('layout')


@section('content')
    

    <h1 class="title">{{$project->title}}</h1>
    <div class="content">{{$project->description}}</div>

    <div>
    <button type="button" class="btn btn-info"><a href="/projects/{{$project->id}}/edit"> Edit</a></button>
       
    </div>

    <form method="POST" action="/projects/{{$project->id}}">

        {{method_field('DELETE')}}
        {{ csrf_field() }}

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button">Delete</button>
            </div>
        </div>
    </form>


@endsection