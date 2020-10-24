@extends('layouts.app')

@section('content')

    <h2> Empleado: {{ $user->nombre }} </h2>
    <p>Email: {{ $user->email }}</p>
    <p>Sexo: {{ $user->sexo }}</p>
    <p>Boletín: {{ $user->boletin }}</p>
    <p>Área: XXX</p>

    <a class="btn btn-danger" href="{{ route('users.index') }}">Regresar</a>

@endsection