<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>
    @foreach ($Comics as $Comic)
            <div>
                <a href="{{route('comic.show', $Comic->id)}}">{{$Comic['Titolo']}}</a>
            </div>
            <form action="{{route('comic.destroy', $Comic->id)}}" method="POST" onsubmit="alert('Are you sure?')">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
            <a href="{{route('comic.edit', $Comic->id)}}" method="GET">Change comic</a>

    @endforeach
            <a href="{{route('comic.create')}}">Add comic</a>
</body>
</html>
