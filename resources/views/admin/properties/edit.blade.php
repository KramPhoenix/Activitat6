@extends('layouts.app')
@section('content')
    <form class="w-100 col-lg-10 mt-4 mb-4 d-flex justify-content-center" action="{{ route('admin.properties.update', $id) }}" method="post">
        @method('post')
        @csrf
        <input type="hidden" name="_method" value="PATCH"/>
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header">Información del inmueble</div>
                <div class="card-body">
                    <label for="titulo">Título:</label><input class="form-control mb-4" placeholder="Título del inmueble" name="titulo" value="{{ $property->title }} ">
                    <label for="precio">Precio:</label><input class="form-control mb-4" placeholder="Precio del inmueble" type="text" name="precio" value="{{ $property->price }}">
                    <label for="desc">Descripción:</label><input class="form-control mb-4" placeholder="Descripcion del inmueble" name="desc" value="{{ $property->description }}">
                </div>
                <div class="col-12 d-flex justify-content-end text-center mb-4">
                    <a href="{{ route('admin.properties.index') }}"><div class="btn btn-outline-danger mx-1">Cancelar</div></a>
                    <input class="btn btn-success mx-1" type="submit" name="submit" value="Guardar">
                </div>
            </div>
        </div>
    </form>
@endsection
