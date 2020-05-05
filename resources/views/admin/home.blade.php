@extends('layouts.app')

@section('content')

    <section class="admin_home col-lg-10">
        <h1 class="text-center mt-4 mb-4">PANEL DE ADMINISTRADOR</h1>
        <div class="row d-flex justify-content-around">
            <div class="card col-lg-4 p-4">
                <h2 class="text-center">USUARIOS</h2>
                <p class="text-center">Usuarios registrados actualmente: {{ $users }}</p>
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">VER TODOS LOS USUARIOS</a>
            </div>
            <div class="card col-lg-4 p-4">
                <h2 class="text-center">INMUEBLES</h2>
                <p class="text-center">Inmuebles registrados actualmente: {{ $properties }}</p>
                <a href="{{ route('admin.properties.index') }}" class="btn btn-primary">VER TODOS LOS INMUEBLES</a>
            </div>
        </div>
    </section>


@endsection
