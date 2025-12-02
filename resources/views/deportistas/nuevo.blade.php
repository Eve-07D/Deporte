@extends('layouts.app')

@section('content')
<h1>Registrar Nuevo Deportista</h1>

<form action="{{ route('deportistas.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Fecha de nacimiento:</label>
    <input type="date" name="fecha_nacimiento" required>

    <label>Estatura (cm):</label>
    <input type="number" name="estatura_cm" required>

    <label>Peso (kg):</label>
    <input type="number" name="peso_kg" required>

    <label>País:</label>
    <select name="pais_id" required>
        @foreach ($paises as $pais)
            <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
        @endforeach
    </select>

    <label>Disciplina:</label>
    <select name="disciplina_id" required>
        @foreach ($disciplinas as $disc)
            <option value="{{ $disc->id }}">{{ $disc->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>
@endsection
