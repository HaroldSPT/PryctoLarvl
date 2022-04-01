{{-- Para podeer herdar la plantilla usar @extends --}}
@extends('layouts.app')

@section('titulo', 'Crear Registro')

@section('contenido')

<form action="/cursos" method="POST" enctype="multipart/form-data">
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
    <h3>Crear curso</h3>
    <div class="form-group">
        <label for="curso">Nombre del curso</label>
        <input type="text" name="nombre" class="form-control" id="curso">
    </div>
    <br>
    <div class="form-group">
        <label for="descripcion">Descripción del curso</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion">
    </div>
    <br>
    <div class="form-group">
        <label for="horas">Horas</label>
        <input type="number" min="1" name="horas" class="form-control" id="horas">
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
{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body>
        --}}
        {{--Bootstrap rquiere un div para mostrar los elementos centrados y ordenados--}}
        {{--
        <div class="container">
            <form action="/cursos" method="POST">
                @csrf
                <div class="form-group">
                <br>
                <h3>Crear curso</h3>
                <div class="form-group">
                    <label for="curso">Nombre del curso</label>
                    <input type="text" name="nombre" class="form-control" id="curso">
                </div>
                <div class="form-group">
                    <label for="curso">Descripción del curso</label>
                    <input type="text" name="descripcion" class="form-control" id="desccurso">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Crear</button>
            </form>
        </div>
    </body>
</html>
--}}