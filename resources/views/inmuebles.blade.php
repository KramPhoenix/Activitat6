@extends('layouts.app')

@section('content')
    <section class="properties col-lg-12 d-flex justify-content-center">
        <div class="col-10 d-flex">
            <div class="w-100 card card-default">
                <div class="card-header">
                    <h3>PROPIEDADES EN VENTA</h3>
                </div>
                <div class="card-body d-flex justify-content-around">
                    @foreach($properties as $property)
                        <div class="w-25 card bg-info">
                            <h5>{{ $property->title }}</h5>
                            <img src="img/{{ $property->img }}">
                            <p>PRECIO: {{ $property->price }}€</p>
                            <p>{{ $property->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
