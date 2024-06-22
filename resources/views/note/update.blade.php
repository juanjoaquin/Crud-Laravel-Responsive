@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note description</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

@section('content')

<body class="body-show">

<div class="banner-show">
            <h1 class="pepito">BLOC DE NOTAS</h1>
        </div>

    <div class="container-show">
        <div class="children-show">
            <div class="texts-show">
                <div class="texts-show1">
                    <label class="label-show">Titlte:</label>
                    <h2 class="note-title"> {{$note->title }}</h2>
                </div>

                <div class="texts-show2">
                    <label class="label-show">Asunto:</label>

                    <h5 class="note-label">{{$note->description }}</h5>
                </div>
            </div>

        </div>


        <a class="back-button" href="{{ route('note.index') }}">Volver atrás</a>

    </div>
</body>

@endsection

</html>

