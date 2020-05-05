@extends('layouts.app')
@section('content')
    <form class="w-100 col-lg-10 mt-4 mb-4 d-flex justify-content-center" action="{{ route('admin.users.update', $id) }}" method="post">
        @method('post')
        @csrf
        <input type="hidden" name="_method" value="PATCH"/>
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header">Información del usuario</div>
                <div class="card-body">
                    <label for="nombre">Nombre:</label><input class="form-control mb-4" placeholder="Nombre del usuario" name="nombre" value="{{ $user->name }} ">
                    <label for="email">Email:</label><input class="form-control mb-4" placeholder="Email del usuario" type="text" name="email" value="{{ $user->email }}">
                    <label for="passwd">Password:</label><input class="form-control mb-4" placeholder="Contraseña del usuario" name="passwd" value="{{ $user->password }}">
                </div>
                <div class="col-12 d-flex justify-content-end text-center mb-4">
                    <a href="{{ route('admin.users.index') }}"><div class="btn btn-outline-danger mx-1">Cancelar</div></a>
                    <input class="btn btn-success mx-1" type="submit" name="submit" value="Guardar">
                </div>
            </div>
        </div>
    </form>
@endsection
