@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')

<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
    <br>
    <h3>Editar información del curso</h3>
    <div class="form-group">
        <label for="curso">Nombre del curso</label>
        <input type="text" name="nombre" value="{{$cursito->nombre}}" class="form-control" id="curso">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción del curso</label>
        <input type="text" name="descripcion" value="{{$cursito->descripcion}}" class="form-control" id="descripcion">
    </div>
    <div class="form-group">
        <label for="imagen">Subir imagen</label>
        <br>
        <input type="file" name="imagen" id="imagen">
    </div>   
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection