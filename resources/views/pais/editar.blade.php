@extends('layouts.app')

@section('content')
<h1>Editar País</h1>

<form action="{{ route('pais.update', $pais->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre del País:</label>
    <input type="text" name="nombre" value="{{ $pais->nombre }}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection
