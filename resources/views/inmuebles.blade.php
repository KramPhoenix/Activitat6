@extends('layouts.app')

@section('content')
    <section class="properties col-lg-12 d-flex justify-content-center">
        <div class="col-10 d-flex">
            <div class="w-100 card card-default">
                <div class="card-header">
                    <h3 class="font-weight-bolder">PROPIEDADES EN VENTA</h3>
                </div>
                <div class="card-body d-flex justify-content-around flex-wrap">
                    @foreach($properties as $property)
                        <div class="col-lg-4 card bg-info p-2 m-2">
                            <h5 class="font-weight-bolder">{{ $property->title }}</h5>
                            <img width="100%" height="225" src="img/{{ $property->img }}">
                            <p><span class="font-weight-bolder">PRECIO: </span>{{ $property->price }}€</p>
                            <p>{{ $property->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
