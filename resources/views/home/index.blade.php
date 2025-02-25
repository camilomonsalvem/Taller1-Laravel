@extends('layouts.app')
@section('title', 'Inicio - Medallo-Bike')
@section('content')
<div class="container text-center mt-5">
    <h2>¡Bienvenido!</h2>
    <p>A continuación, escoge una de las siguientes opciones:</p>

    <div class="mt-4">
        <a href="{{ route('route.create') }}" class="btn btn-success btn-lg mx-2">Crear Nueva Ruta</a>
        <a href="{{ route('route.index') }}" class="btn btn-primary btn-lg mx-2">Rutas</a>
    </div>
</div>
@endsection
