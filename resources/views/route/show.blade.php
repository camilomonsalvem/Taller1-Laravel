@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <!-- Imagen a la izquierda -->
        <div class="col-md-4">
            <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
        </div>

        <!-- Información de la ruta a la derecha -->
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $viewData["route"]["name"] }}</h5>
                <p class="card-text"><strong>Descripción:</strong> {{ $viewData["route"]["description"] }}</p>
                <p class="card-text"><strong>Dificultad:</strong> {{ $viewData["route"]["difficulty"] }}</p>
                <p class="card-text"><strong>Tipo:</strong> {{ $viewData["route"]["type"] }}</p>
                <p class="card-text"><strong>Zona:</strong> {{ $viewData["route"]["zone"] }}</p>
                <p class="card-text"><strong>Imagen:</strong> {{ $viewData["route"]["imageMap"] }}</p>
                <p class="card-text"><strong>Coordenadas de Inicio:</strong> {{ $viewData["route"]["coordinateStart"] }}</p>
                <p class="card-text"><strong>Coordenadas de Fin:</strong> {{ $viewData["route"]["coordinateEnd"] }}</p>
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-3">
    <a href="{{ route('route.index') }}" class="btn btn-primary">Volver</a>

    <form action="{{ route('route.destroy', ['id' => $viewData['route']['id']]) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar Ruta</button>
    </form>
</div>
@endsection
