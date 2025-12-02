@extends('layouts.app')

@section('content')
<h1>Listado de Deportistas</h1>

<a href="{{ route('deportistas.create') }}">➕ Nuevo Deportista</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Nombre</th>
        <th>País</th>
        <th>Disciplina</th>
        <th>Fecha de Nacimiento</th>
        <th>Estatura</th>
        <th>Peso</th>
        <th>Acciones</th>
    </tr>

    @foreach ($deportistas as $dep)
    <tr>
        <td>{{ $dep->nombre }}</td>
        <td>{{ $dep->pais->nombre }}</td>
        <td>{{ $dep->disciplina->nombre }}</td>
        <td>{{ $dep->fecha_nacimiento }}</td>
        <td>{{ $dep->estatura_cm }} cm</td>
        <td>{{ $dep->peso_kg }} kg</td>

        <td>
            <a href="{{ route('deportistas.edit', $dep->id) }}">✏ Editar</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
