@extends('layouts/template')

@section('title', 'Editar')

@section('content')
<form action="{{url('productos/'.$id)}}" method="POST">
    @csrf
    @method('DELETE')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" disabled>
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control" disabled>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection