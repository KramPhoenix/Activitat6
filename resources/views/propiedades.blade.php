@extends('layouts.app')

@section('content')
    <section class="mispropiedades col-lg-12 d-flex justify-content-center">
        <div class="col-10 d-flex">
            <div class="w-100 card card-default">
                <div class="card-header d-flex justify-content-around">
                    <h4>MIS PROPIEDADES</h4>
                    <a href="{{ route('myproperties.create') }}"><button class="btn btn-info">NUEVA PROPIEDAD</button></a>
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
