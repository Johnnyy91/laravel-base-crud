<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit-Document</title>
</head>
<body>
    <form action="{{route('comic.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="Titolo">Inserisci titolo</label>
        <input type="text" name="Titolo" value="{{$comic->Titolo}}">
        <label for="Copertina">Inserisci copertina</label>
        <input type="text" name="Copertina" value="{{$comic->Copertina}}">
        <label for="type">Inserisci tipo</label>
        <input type="text" name="type" value="{{$comic->type}}">
        <label for="Description">Inserisci descrizione</label>
        <input type="text" name="Description" value="{{$comic->Description}}">
        <input type="submit" value="Invio">
    </form>
</body>
</html>
