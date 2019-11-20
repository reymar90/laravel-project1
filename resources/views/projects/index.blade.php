<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <h1>Projects</h1>

    <ul style="list-style-type:none">
            @foreach ($projects as $project)
            <li>{{$project->id}} - <a href="/projects/{{$project->id}}">{{$project->title}}</a>  -  {{$project->description}}</li>
            @endforeach
    </ul>

    <div style="form-inline">
        <div>
        <button type="button" class="btn btn-primary"><a style="color:white;" href="/projects/create">Create</a></button>
             
        </div>
        
    </div>
   
   

  
</body>
</html>