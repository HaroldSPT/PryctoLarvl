@extends('layouts.app')

@section('titulo', 'Detalles')

@section('contenido')

<div class="text-center">
    <img style="height: 250px; width: 286px; margin: 20px" src="{{ Storage::url($docen->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$docen->nombre}} {{$docen->apellido}}</h5>
        <p class="card-text">{{$docen->titulo}}</p>
        <p class="card-text">{{$docen->curso}}</p>
    </div>
    <a href="/docentes/{{$docen->id}}/edit" class="btn btn-warning">Editar</a>
    <br>
    <br>
    {{--Formulario para botón eliminar--}}
    <form class="form-group" action="/docentes/{{$docen->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"  class="btn btn-danger">Eliminar</button>
    </form>
</div>

@endsection