@extends('layouts.app')

@section('content')
    <section class="contacto col-lg-12 d-flex justify-content-center">
        <form class="w-100 col-lg-10 mt-4 mb-4 d-flex justify-content-center" action="" method="post">
            @method('post')
            @csrf
            <input type="hidden" name="_method" value="POST"/>
            <div class="col-lg-8">
                <div class="card card-default">
                    <div class="card-header">CONTACTO</div>
                    <div class="card-body">
                        <label for="name">Nombre completo:</label><input class="form-control mb-4" placeholder="Nombre completo del solicitante" name="name" value="">
                        <div class="form-group row">
                            <label for="date" class="col-12 col-form-label">Fecha de nacimiento: </label>
                            <div class="col-8">
                                <input class="form-control" type="date" name="date">
                            </div>
                        </div>
                        <label for="email">Email:</label><input class="form-control mb-4" type="email" placeholder="Email del solicitante" name="email" value="">
                        <label for="telephone">Teléfono/Móvil:</label><input class="form-control mb-4" type="tel" placeholder="Teléfono/Móvil del solicitante" type="tel" name="telephone" value="">
                        <div class="form-group">
                            <label for="comment">Comentario:</label>
                            <textarea class="form-control" name="comment" placeholder="Escríbenos un mensaje detallado sobre que necesitas para que podamos facilitar tu respuesta..." rows="4"></textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="condiciones">
                            <label class="form-check-label" for="condiciones">He leído y acepto las condiciones de servicio de Marc$ERVICES</label>
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
