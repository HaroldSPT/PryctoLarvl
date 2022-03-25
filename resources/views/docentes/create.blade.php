@extends('layouts.app')

@section('titulo', 'Registrar Docente')

@section('contenido')

<form action="/docentes" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
        @foreach ($errors->all() as $alerta)
        <div class="alert alert-danger" role="alert">
            <ul>
                <li>{{$alerta}}</li>
            </ul>
        </div>
        @endforeach
    @endif
    <div class="form-group">
    <h3>Registro de Docente</h3>
    <div class="form-group">
        <label for="nombre">Nombres del docente</label>
        <input type="text" name="nombre" class="form-control" id="nombre">
    </div>
    <br>
    <div class="form-group">
        <label for="apellido">Apellidos del docente</label>
        <input type="text" name="apellido" class="form-control" id="apellido">
    </div>
    <br>
    <div class="form-group">
        <label for="titulo">Título del docente</label>
        <input type="text" name="titulo" class="form-control" id="titulo">
    </div>
    <br>
    <div class="form-group">
        <label for="curso">Curso asociado al docente</label>
        <input type="text" name="curso" class="form-control" id="curso">
    </div>
    <br>
    <div class="form-group">
        <label for="imagen">Subir imagen</label>
        <br>
        <input type="file" name="imagen" id="imagen">
    </div>   
    <br>
    <button type="submit" class="btn btn-success">Crear</button>
</form>

@endsection