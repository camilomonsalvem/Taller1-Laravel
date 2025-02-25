@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Ruta</div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <ul id="errors" class="alert alert-danger list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ route('route.save') }}">
                        @csrf
                        <label for="name">Nombre de la Ruta:</label>
                        <input type="text" class="form-control mb-2" placeholder="Ingrese el nombre" name="name" value="{{ old('name') }}" required/>

                        <label for="description">Descripción:</label>
                        <textarea class="form-control mb-2" placeholder="Ingrese una descripción" name="description">{{ old('description') }}</textarea>

                        <label for="difficulty">Dificultad (1-10):</label>
                        <input type="number" class="form-control mb-2" name="difficulty" min="1" max="10" value="{{ old('difficulty') }}" required/>

                        <label for="type">Tipo de Ruta:</label>
                        <select class="form-control mb-2" name="type">
                            <option value="Hiking">Hiking</option>
                            <option value="Cycling">Cycling</option>
                            <option value="Climbing">Climbing</option>
                            <option value="Running">Running</option>
                        </select>

                        <label for="zone">Zona:</label>
                        <input type="text" class="form-control mb-2" placeholder="Ingrese la zona" name="zone" value="{{ old('zone') }}" required/>

                        <label for="imageMap">Referencia de imagen (Texto):</label>
                        <input type="text" class="form-control mb-2" placeholder="Ejemplo: mapa_ruta1" name="imageMap" value="{{ old('imageMap') }}"/>

                        <label for="coordinateStart">Coordenadas de inicio (Formato: lat,lng):</label>
                        <input type="text" class="form-control mb-2" placeholder="Ejemplo: 6.2353,-75.5795" name="coordinateStart" value="{{ old('coordinateStart') }}" required/>

                        <label for="coordinateEnd">Coordenadas de fin (Formato: lat,lng):</label>
                        <input type="text" class="form-control mb-2" placeholder="Ejemplo: 6.2400,-75.5812" name="coordinateEnd" value="{{ old('coordinateEnd') }}" required/>

                        <input type="submit" class="btn btn-primary" value="Crear Ruta"/>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
