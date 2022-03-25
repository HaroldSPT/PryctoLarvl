@extends('layouts.app')

@section('titulo' , 'Listado de Docentes')

@section('contenido')

    <h3 class="text-center">Docentes en la Institución</h3>

    <div class="row">     
    @foreach ($docen as $docentenuevo)
    <div class="col-sm">
        <div class="card" style="width: 18rem; margin-top:30px">
            <img style="height: 250px; width: 286px; margin: 20px" src="{{Storage::url($docentenuevo->imagen)}}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body text-center">
            <h5 class="card-title">{{$docentenuevo->nombre}} {{$docentenuevo->apellido}}</h5>
            <p class="card-text">{{$docentenuevo->curso}}</p>
            <a href="/docentes/{{$docentenuevo->id}}" class="btn btn-warning">Ver más</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection