<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form-Date</title>
</head>
<body>
    <form action="{{route('comic.store')}}" method="post">
        @csrf
        <label for="Titolo">Inserisci titolo</label>
        <input type="text" name="Titolo">
        <label for="Copertina">Inserisci copertina</label>
        <input type="text" name="Copertina">
        <label for="type">Inserisci tipo</label>
        <input type="text" name="type">
        <label for="Description">Inserisci descrizione</label>
        <input type="text" name="Description">
        <input type="submit" value="Invio">
    </form>
</body>
</html>
