@extends('layouts.app')

@section('content')
<h1>Editar Disciplina</h1>

<form action="{{ route('disciplina.update', $disciplina->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre de la Disciplina:</label>
    <input type="text" name="nombre" value="{{ $disciplina->nombre }}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection
