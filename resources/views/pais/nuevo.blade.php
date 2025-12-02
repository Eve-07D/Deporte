@extends('layouts.app')

@section('content')
<h1>Registrar País</h1>

<form action="{{ route('pais.store') }}" method="POST">
    @csrf

    <label>Nombre del País:</label>
    <input type="text" name="nombre" required>

    <button type="submit">Guardar</button>
</form>
@endsection
