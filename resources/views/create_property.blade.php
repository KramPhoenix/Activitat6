@extends('layouts.app')

@section('content')
    <section class="misventas col-lg-12 d-flex justify-content-center">
        <form class="w-100 col-lg-12 mt-4 mb-4 d-flex justify-content-center" enctype="multipart/form-data" action="{{ route('myproperties.store') }}" method="post">
            @method('post')
            @csrf
            <input type="hidden" name="_method" value="POST"/>
            <div class="col-lg-8">
                <div class="card card-default">
                    <div class="card-header">PUBLICAR NUEVA PROPIEDAD</div>
                    <div class="card-body">
                        <label for="title">Título:</label><input class="form-control mb-4" placeholder="Título de la propiedad" name="titulo" value="">
                        <div class="form-group row">
                            <label for="img" class="col-12 col-form-label">Imagen: </label>
                            <div class="col-8">
                                <input type="file" name="imagen">
                            </div>
                        </div>
                        <label for="price">Precio:</label><input class="form-control mb-4" type="text" placeholder="Precio de la propiedad" name="precio" value="">
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea class="form-control" name="desc" placeholder="Escribe una breve descripción sobre la propiedad..." rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end text-center mb-4">
                        <input class="btn btn-success mx-1" type="submit" name="submit" value="Enviar">
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
