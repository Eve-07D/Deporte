@extends('layouts.app')

@section('content')
<h1>Países</h1>

<a href="{{ route('pais.create') }}"> Nuevo País</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>

    @foreach ($paises as $pais)
    <tr>
        <td>{{ $pais->nombre }}</td>
        <td>
            <a href="{{ route('pais.edit', $pais->id) }}">✏ Editar</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
