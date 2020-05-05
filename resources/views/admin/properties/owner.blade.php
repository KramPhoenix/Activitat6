@extends('layouts.app')
@section('content')
    <div class="col-12 d-flex justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="w-100 card-header font-weight-bold">
                    INFORMACIÓN DEL PROPIETARIO
                </div>
                <div class="card-body">
                    <p><span class="font-weight-bold">Nombre:</span> {{ $user->name }}</p>
                    <p><span class="font-weight-bold">Email:</span> {{ $user->email }}</p>
                    <p><span class="font-weight-bold">Rol:</span> @if($user->role == 2) Comprador @elseif($user->role == 1)  Admin @else Vendedor @endif </p>
                    <div class="col-12 d-flex justify-content-end text-center mb-2">
                        <a href="{{ route('admin.properties.index') }}"><div class="btn btn-outline-danger mx-1">Volver</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
