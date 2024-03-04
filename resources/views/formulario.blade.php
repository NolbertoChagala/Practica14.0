@extends('plantilla')

@section('titulo')
    Agregar Estudiantes
@endsection

@section('contenido')
<link rel="stylesheet" href="{{ asset('App/resources/css/students.css') }}">
<div class="container">
    <h1>Agregar Estudiante</h1>

    @if ($mensaje = Session::get('success'))
        <div class="alert alert-success">
            {{ $mensaje }}
        </div>                
    @endif

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf

        <input type="text" name="nombre_alumnos" placeholder="Nombre" value="{{ old('nombre_alumnos') }}">
        @error('nombre_alumnos')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="text" name="matricula_alumnos" placeholder="Matricula" value="{{ old('matricula_alumnos') }}">
        @error('matricula_alumnos')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="email" name="correo_alumnos" placeholder="Correo" value="{{ old('correo_alumnos') }}">
        @error('correo_alumnos')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="password" name="contraseña" placeholder="Contraseña">
        @error('contraseña')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Registrar</button>
    </form>
</div>
@endsection
