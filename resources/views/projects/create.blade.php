<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h1>Create a new Project!!</h1>
  
 
    <form method="POST" action="/projects" >

        {{-- @csrf  --}}
        {{ csrf_field() }}

        <div>
            <input type="text" name="title" placeholder="Title" required>
        </div>

        <div>
            <textarea name="description" placeholder="Description" cols="30" rows="10" required></textarea>
        </div>
        
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    
</body>
</html>