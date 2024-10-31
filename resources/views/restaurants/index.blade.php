@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Tuo Ristorante</title>
</head>
<body>
    <h1>Il Tuo Ristorante</h1>

    @if(!$restaurants)
        <p>Non hai registrato alcun ristorante.</p>

    @else
        @foreach  ($restaurants as $restaurant)
        <p>Nome: {{$restaurant->name}}</p>
        <p>Indirizzo: {{$restaurant->address}}</p>
        <p>Telefono: {{$restaurant->phone}}</p>
        @endforeach
    @endif
</body>
</html>
@endsection