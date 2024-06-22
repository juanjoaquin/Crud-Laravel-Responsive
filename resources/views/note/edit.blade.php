<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Formulario update</title>
</head>

<body class="body-edit">
    <div class="container-edit">
        @extends('layouts.app')

        @section('content')

        <div class="form-container">
            <div class="text-form">
            <h1 class="welcome-form">Bienvenido!</h1>
            <p class="welcome-p">Está es la sección del formulario donde 
            <br> tendrás la oportunidad de editar tus notas.</p>
            

            <a class="button-back-edit" href="{{route('note.index') }}">Volver atrás</a>

            </div>


            <div class="form-children">
                <form method="POST" action="{{ route('note.update', $note->id) }}">
                    @method('PUT')
                    
                    @csrf
                    <div class="form-title-edit">
                        <h3 class="h4-form">Update form</h3>
                        <p>Here you can update your notes!</p>
                    </div>
                    <label for="">Title:</label>
                    <input class="input-form" placeholder="Titlte" type="text" name="title" value="{{$note->title}}">
                    @error('title')
                    <p style="color:red">{{ $message }}</p>
                    @enderror

                    <label for="">Description:</label>
                    <input class="input-form" placeholder="Description" type="text" name="description" 
                    value="{{$note->description}}">
                    @error('description')
                    <p style="color:red">{{ $message }}</p>
                    @enderror

                    <input class="button-form" type="submit" value="Update">

                </form>
            </div>
        </div>
        
        @endsection
    </div>
</body>

</html>