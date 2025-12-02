@extends('layouts.app')

@section('content')
<h1>Disciplinas</h1>

<a href="{{ route('disciplina.create') }}">➕ Nueva Disciplina</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>

    @foreach ($disciplinas as $disc)
    <tr>
        <td>{{ $disc->nombre }}</td>
        <td>
            <a href="{{ route('disciplina.edit', $disc->id) }}">✏ Editar</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
