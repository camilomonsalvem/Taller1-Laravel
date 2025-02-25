@extends('layouts.app')
@section('title', 'Ruta Creada')
@section('content')
<div class="container text-center mt-5">
    <h2 class="text-success">¡Elemento creado satisfactoriamente!</h2>
    <p>La ruta <strong>{{ $route->name }}</strong> ha sido creada exitosamente.</p>

    <div class="card mx-auto mt-4" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title">{{ $route->name }}</h5>
            <p class="card-text"><strong>Descripción:</strong> {{ $route->description }}</p>
            <p class="card-text"><strong>Dificultad:</strong> {{ $route->difficulty }}</p>
            <p class="card-text"><strong>Tipo:</strong> {{ $route->type }}</p>
            <p class="card-text"><strong>Zona:</strong> {{ $route->zone }}</p>
            <p class="card-text"><strong>Imagen:</strong> {{ $route->imageMap }}</p>
            <p class="card-text"><strong>Coordenadas de Inicio:</strong> {{ $route->coordinateStart }}</p>
            <p class="card-text"><strong>Coordenadas de Fin:</strong> {{ $route->coordinateEnd }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('route.index') }}" class="btn btn-primary">Ver Todas las Rutas</a>
        <a href="{{ route('route.create') }}" class="btn btn-success">Crear Otra Ruta</a>
    </div>
</div>
@endsection
