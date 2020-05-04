<div class="col-lg-2">
    <nav class="navbar navbar-expand-lg navbar-light d-flex flex-column align-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto d-flex flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users.index') }}">USUARIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.properties.index') }}">INMUEBLES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">VENTAS</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
