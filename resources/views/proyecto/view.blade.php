@extends('layouts.layouts')

@section('titulo')
    Detalle Proyecto
@endsection

@section('contenido')
    <h1 class="text-center">Detalle de Proyecto</h1>
    <br><br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Nombre: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$proyecto->nombre}}</p>
        </div>
    </div>
<br>
    <div class="row">
        <div class="col-sm-3">
            <h3>Duracion en Meses: </h3>
        </div>
        <div class="col-sm-3">
            <p class="lead">{{$proyecto->duracion}}</p>
        </div>
            
    </div>
  <br><br>
    

    <div class="row">
       <a href=" {{route('proyecto.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
@endsection