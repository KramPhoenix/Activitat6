@extends('layouts.app')

@section('content')
    <section class="mispropiedades col-lg-12 d-flex justify-content-center">
        <div class="col-10 d-flex">
            <div class="w-100 card card-default">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="font-weight-bold">MIS PROPIEDADES</h4>
                    <a href="{{ route('myproperties.create') }}"><button class="btn btn-info font-weight-bold">NUEVA PROPIEDAD</button></a>
                </div>
                <div class="card-body d-flex justify-content-around">
                    @foreach($properties as $property)
                        <div class="w-25 card bg-info p-2">
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
