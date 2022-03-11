@extends('layouts.app')

@section('titulo' , 'Listado de Cursos')

@section('contenido')

    <h3 class="text-center">Listado de Cursos Disponibles</h3ñ>

    <div class="row">     
    {{-- Foreach es un ciclo o bucle especial para trabajar con arrays --}}
    @foreach ($cursito as $cursonuevo)
    {{-- Para llamar información de php basta con interpolar las variables
    usando la doble llave --}}
    <div class="col-sm">
        <div class="card" style="width: 18rem; margin-top:30px">
            <img style="height: 250px; width: 286px; margin: 20px" src="{{Storage::url($cursonuevo->imagen)}}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body text-center">
            <h5 class="card-title">{{$cursonuevo->nombre}}</h5>
            <p class="card-text">{{$cursonuevo->descripcion}}</p>
            <a href="" class="btn btn-warning">Ver más</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection