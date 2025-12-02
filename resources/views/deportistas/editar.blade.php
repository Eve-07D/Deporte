@extends('layouts.app')

@section('content')
<h1>Editar Deportista</h1>

<form action="{{ route('deportistas.update', $deportista->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $deportista->nombre }}" required>

    <label>Fecha de nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="{{ $deportista->fecha_nacimiento }}" required>

    <label>Estatura (cm):</label>
    <input type="number" name="estatura_cm" value="{{ $deportista->estatura_cm }}" required>

    <label>Peso (kg):</label>
    <input type="number" name="peso_kg" value="{{ $deportista->peso_kg }}" required>

    <label>País:</label>
    <select name="pais_id">
        @foreach ($paises as $pais)
            <option value="{{ $pais->id }}" @if($pais->id == $deportista->pais_id) selected @endif>
                {{ $pais->nombre }}
            </option>
        @endforeach
    </select>

    <label>Disciplina:</label>
    <select name="disciplina_id">
        @foreach ($disciplinas as $disc)
            <option value="{{ $disc->id }}" @if($disc->id == $deportista->disciplina_id) selected @endif>
                {{ $disc->nombre }}
            </option>
        @endforeach
    </select>

    <button type="submit">Actualizar</button>
</form>
@endsection
