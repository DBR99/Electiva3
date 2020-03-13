@extends('layouts.layouts')

@section('titulo')
    Desarrolladores
@endsection

@section('contenido')
    <h1 class="text-center">Desarrolladores</h1>
    <br><br>
    
    @if($message = Session::get('exito'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>ID Proyecto</th>
                <th>Acciones</th>
            </thead>
        
            <tbody>
                @foreach ($desarrollador as $desarrollador)
                <tr>
                    <td>{{$desarrollador -> nombre}}</td>
                    <td>{{$desarrollador -> apellido}}</td>
                    <td>{{$desarrollador -> telefono}}</td>
                    <td>{{$desarrollador -> direccion}}</td>
                    <td>{{$desarrollador -> idproyecto}}</td>
                    <td>
                        <form action="{{route('desarrollador.destroy', $desarrollador->id)}}" method="post">
                            <a href="{{route('desarrollador.show', $desarrollador->id)}}" class="btn btn-info">Ver</a>
                            <a href="{{route('desarrollador.edit', $desarrollador->id)}}" class="btn btn-primary">Editar</a>
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
        <a href="{{route('desarrollador.create')}} "><button class="btn btn-success">Crear Desarrollador</button></a>
    </div>

@endsection