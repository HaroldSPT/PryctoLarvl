@extends('layouts.app')

@section('titulo', 'Editar Datos')

@section('contenido')

<form action="/docentes/{{$docen->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
    <br>
    <h3>Editar información del docente</h3>
    <div class="form-group">
        <label for="nombre">Nombres del docente</label>
        <input type="text" name="nombre" value="{{$docen->nombre}}" class="form-control" id="nombre">
    </div>
    <br>
    <div class="form-group">
        <label for="apellido">Apellidos del curso</label>
        <input type="text" name="apellido" value="{{$docen->apellido}}" class="form-control" id="apellido">
    </div>
    <br>
    <div class="form-group">
        <label for="titulo">Título(s) del docente</label>
        <input type="text" name="titulo" value="{{$docen->titulo}}" class="form-control" id="titulo">
    </div>
    <br>
    <div class="form-group">
        <label for="curso">Curso ascociado al docente</label>
        <input type="text" name="curso" value="{{$docen->curso}}" class="form-control" id="curso">
    </div>
    <br>
    <div class="form-group">
        <label for="imagen">Subir imagen</label>
        <br>
        <input type="file" name="imagen" id="imagen">
    </div>   
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection