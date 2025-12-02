@extends('layouts.app')

@section('content')
<h1>Nueva Disciplina</h1>

<form action="{{ route('disciplina.store') }}" method="POST">
    @csrf

    <label>Nombre de la Disciplina:</label>
    <input type="text" name="nombre" required>

    <button type="submit">Guardar</button>
</form>
@endsection
