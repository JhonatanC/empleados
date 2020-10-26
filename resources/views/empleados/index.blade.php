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
                    <th scope="col"> <i class="fas fa-user"></i> Nombre</th>
                    <th scope="col"> <i class="fas fa-at"></i> Email</th>
                    <th scope="col"> <i class="fas fa-venus-mars"></i> Sexo</th>
                    <th scope="col"> <i class="fas fa-briefcase"></i> Área</th>
                    <th scope="col"> <i class="fas fa-envelope"></i> Boletín</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Elminiar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->sexo }}</td>
                        <td>{{ $user->area->nombre }}</td>
                        <td>{{ $user->boletin }}</td>
                        <td><a href="{{ route('users.edit', $user->id) }}"> <i class="fas fa-edit"></i> </a></td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button style="background: transparent; border: none;" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

@endsection