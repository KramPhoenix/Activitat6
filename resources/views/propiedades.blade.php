@extends('layouts.app')

@section('content')
    <section class="mispropiedades col-lg-12 d-flex justify-content-center">
        <div class="col-10 d-flex">
            <div class="w-100 card card-default">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="font-weight-bold">MIS PROPIEDADES</h4>
                    <a href="{{ route('myproperties.create') }}"><button class="btn btn-info font-weight-bold">NUEVA PROPIEDAD</button></a>
                </div>
                <div class="card-body d-flex justify-content-around flex-wrap">
                    @foreach($properties as $property)
                        <div class="col-lg-4 m-2 card bg-info p-2">
                            <h5 class="font-weight-bolder">{{ $property->title }}</h5>
                            <img width="100%" height="225" src="img/{{ $property->img }}">
                            <p><span class="font-weight-bolder">PRECIO: </span>{{ $property->price }}€</p>
                            <p>{{ $property->description }}</p>
                            <div class="d-flex justify-content-around">
                                <a href=" {{ route('myproperties.edit' , $property->id) }} " class="btn btn-warning a-btn-slide-text">
                                    <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                                <a href=" {{ route('myproperties.destroy' , $property->id) }} " class="btn btn-danger a-btn-slide-text">
                                    <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
