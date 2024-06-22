<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="all-container">
        @extends('layouts.app')

        @section('content')
        <div class="banner">
            <h1 class="pepito">BLOC DE NOTAS</h1>
        </div>

        <div class="container">
            <div class="top-container">
                <a href="{{ route('note.create')}}" class="button-newnote"><i class="fa-solid fa-gear"></i> NUEVA NOTA</a>
            </div>

            <div class="titles-and">
                <div class="encabezado">
                    <p>Title</p>
                    <p>Create date</p>
                    <p>Actions</p>
                </div>
            </div>

            <div class="notes">
                @forelse($notes as $note)
                <div class="note {{ $loop->index % 2 == 0 ? 'note-even' : 'note-odd' }}">
                    <div class="buttons">
                        <div>
                            <a class="title" href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a>
                            <a class="title-redirect" href="{{ route('note.show', $note->id) }}"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                        <div class="created">
                            <p class="created_at">{{$note->created_at}}</p>
                        </div>
                        <div class="button-group">
                            <a class="button-edit" href="{{ route('note.edit', $note->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form method="POST" action="{{ route('note.destroy', $note->id) }}" style="display:inline;">

                                @method('DELETE')
                                @csrf
                                <button class="button-delete" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <h3>No data yet.</h3>
                @endforelse
            </div>
            <div class="links">
                {{$notes->links() }}
            </div>
        </div>
        @endsection
    </div>
</body>

</html>