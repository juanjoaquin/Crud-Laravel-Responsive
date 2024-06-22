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
    <title>Create note</title>
</head>

<body class="body-edit-create">
    <div class="container-create">

        @extends('layouts.app')

        @section('content')
        <div class="form-container-create">
             <div class="text-form-create"> 
            <h1 class="welcome-form-create">Bienvenido!</h1>
            <p class="welcome-p-create">Está es la sección del formulario donde
                <br> tendrás la oportunidad de crear tus notas.
            </p>

            <a class="button-welcome-create" href="{{route('note.index') }}">Volver atrás</a>

            </div> 


            <div class="form-children-create">
                <div class="form-title-create">
                    <h3 class="h4-form-create">Create note</h3>
                    <p class="p-form-title-create">Here you can create your notes!</p>
                </div>
                <form method="POST" action="{{route('note.store')}}">
                    @csrf


                    <label for="">Title:</label>
                    <input class="input-form-create" type="text" name="title">
                    @error('title')
                    <p style="color:red">{{ $message }}</p>
                    @enderror

                    <label for="">Description:</label>
                    <input class="input-form-create" type="text" name="description">
                    @error('description')
                    <p style="color:red">{{ $message }}</p>
                    @enderror

                    <input class="button-form-create" type="submit" value="Create">

                </form>
            </div>

            @endsection
        </div>
    </div>
</body>

</html>