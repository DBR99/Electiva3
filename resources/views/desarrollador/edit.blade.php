@extends('layouts.layouts')

@section('titulo', 'Modificar Desarrollador')

@section('contenido')
<h1 class="text-center">Modificar Desarrollador</h1>
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

        <form action="{{route('desarrollador.update', $desarrollador->id)}} " method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Modificar Nombre del Desarrollador:</label>
                    <input type="text" class="form-control" name="nombre" value="{{$desarrollador->nombre}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Modificar Apellido del Desarrollador:</label>
                    <input type="text" class="form-control" name="apellido" value="{{$desarrollador->apellido}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Modificar Telefono del Desarrollador:</label>
                    <input type="text" class="form-control" name="telefono" value="{{$desarrollador->telefono}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Modificar Direccion del Desarrollador:</label>
                    <input type="text" class="form-control" name="direccion" value="{{$desarrollador->direccion}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Modificar ID del Proyecto:</label>
                    <input type="text" class="form-control" name="idproyecto" value="{{$desarrollador->idproyecto}}">
                </div>
            </div>
            
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Desarrollador</button>
            </div>

        </form>

        <br><br>
        <div class="row">
            <a href=" {{route('desarrollador.index')}}"><button class="btn btn-primary">Volver</button></a>
         </div>
@endsection