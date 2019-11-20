@extends('layout')

@section('content')
 <!DOCTYPE html>
 <html lang="en">
 <head>
    
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
     <title>Document</title>
 </head>
 <body >
     <h1 class="label">Edit Project</h1>

    <form method="POST" action="/projects/{{$project->id}}">

        {{method_field('PATCH')}}
        @csrf

            <div class="field">
                <label class="label">Title</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" name="title" type="text" placeholder=""  value="{{$project->title}}">
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                    </span>
                </div>
            </div>
                    
            <div class="field">
                <label class="label">Description</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="text" name="description" value="{{$project->description}}" placeholder="" >
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                    </span>
                </div>
                
            </div>
                        
                    
                    
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Update</button>
                </div>
                
            </div>
    </form>

    <form method="POST" action="/projects/{{$projects->id}}">

        {{method_field('DELETE')}}
        {{ csrf_field() }}

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button">Delete</button>
            </div>
        </div>
    </form>
 
 </body>
 </html>


   

    
    
@endsection