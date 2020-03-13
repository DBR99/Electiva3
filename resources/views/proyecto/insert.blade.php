@extends('layouts.layouts')

@section('titulo')
    Crear Nuevo Proyecto
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Proyecto</h1>
<br><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"> <strong>Ups. =)</strong>Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
        </ul>
    </div>
@endif

<br><br>

        <form action="{{route('proyecto.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del Proyecto:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Duración del Proyecto (Meses):</label>
                    <input type="number" class="form-control" name="duracion" placeholder="0">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Crear Proyecto</button>
            </div>

        </form>
        <br><br>
        <div class="row">
            <a href=" {{route('proyecto.index')}}"><button class="btn btn-primary">Volver</button></a>
         </div>
@endsection