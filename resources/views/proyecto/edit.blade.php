@extends('layouts.layouts')

@section('titulo', 'Modificar Proyecto')

@section('contenido')
<h1 class="text-center">Modificar Proyecto</h1>
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

        <form action="{{route('proyecto.update', $proyecto->id)}} " method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Modificar Nombre del Proyecto:</label>
                    <input type="text" class="form-control" name="nombre" value="{{$proyecto->nombre}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Modificar Duración del Proyecto (Meses):</label>
                    <input type="number" class="form-control" name="duracion" value="{{$proyecto->duracion}}">
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