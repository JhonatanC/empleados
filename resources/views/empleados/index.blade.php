@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Listado de Usuarios</h2>
            <a class="btn btn-primary" href="{{ route('users.create') }}">Crear Usuario</a>
        </div>
    </div>

    

    <div class="row">
        <div class="col-md-12">
        </div>

        <div class="col-md-12">
        @include('empleados.partials.info')
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Área</th>
                    <th scope="col">Boletín</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Elminiar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td> <a href="{{ route('users.show', $user->id) }}"> <strong> {{ $user->nombre }} </strong> </a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->sexo }}</td>
                        <td>{{ $user->area_id }}</td>
                        <td>{{ $user->boletin }}</td>
                        <td><a href="{{ route('users.edit', $user->id) }}"> Editar </a></td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

@endsection