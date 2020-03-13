@extends('layouts.layouts')

@section('titulo')
    Crear Nuevo Desarrollador
@endsection

@section('contenido')
<h1 class="text-center">Crear Nuevo Desarrollador</h1>
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

        <form action="{{route('desarrollador.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del desarrollador:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Apellido del desarrollador:</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Telefono del desarrollador:</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Direccion del desarrollador:</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>ID del Proyecto:</label>
                    <input type="text" class="form-control" name="idproyecto" placeholder="ID Proyecto">
                </div>
            </div>

            <div class="form-row">
                <button type="submit" class="btn btn-primary">Crear desarrollador</button>
            </div>

        </form>
        <br><br>
        <div class="row">
            <a href=" {{route('desarrollador.index')}}"><button class="btn btn-primary">Volver</button></a>
         </div>
@endsection