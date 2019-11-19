<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>players</title>
</head>
<body>

    <ul>
        @foreach ($players as $player)
        <li>{{$player->player_name}}</li>
    
        @endforeach
    </ul>
   
    
</body>
</html>