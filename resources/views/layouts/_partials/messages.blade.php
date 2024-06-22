<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

@if($message = Session::get('success'))

<!-- style="padding: 15px; background-color: green; color: white;"
  -->
    <div class="alert-success">
        <h2>{{ $message }}</h2>
        <meta http-equiv="refresh" content="3;url={{ route('note.index') }}" />
    </div>
@endif

@if($message = Session::get('danger'))
    <div class="alert-danger" style="padding: 15px; background-color: red; color: white;">
        <h2>{{ $message }}</h2>
        <meta http-equiv="refresh" content="3;url={{ route('note.index') }}" />
    </div>
@endif