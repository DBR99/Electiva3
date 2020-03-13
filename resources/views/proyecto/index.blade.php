@extends('layouts.layouts')

@section('titulo')
    Proyectos
@endsection

@section('contenido')
    <h1 class="text-center">Proyectos</h1>
    <br><br>
    
    @if($message = Session::get('exito'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        
            <thead>
                <th>Nombre</th>
                <th>Duración</th>
                <th>Acciones</th>
            </thead>
        
            <tbody>
                @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{$proyecto -> nombre}}</td>
                    <td>{{$proyecto -> duracion}}</td>
                    <td>
                        <form action="{{route('proyecto.destroy', $proyecto->id)}}" method="post">
                        <a href="{{route('proyecto.show', $proyecto->id)}}" class="btn btn-info">Ver</a>
                        <a href="{{route('proyecto.edit', $proyecto->id)}}" class="btn btn-primary">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" >Eliminar</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
<br><br>
    <div class="row">
        <a href="{{route('proyecto.create')}} "><button class="btn btn-success">Crear Proyecto</button></a>
    </div>

@endsection