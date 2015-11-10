<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
    @include('admin.template.partials.nav')
    <section>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">@yield('title')</h3>
            </div>
            <div class="panel-body">
                @include('flash::message')
                @include('admin.template.partials.errors')
                @yield('content')
            </div>
        </div>
    </section>

    <footer>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <p class="navbar-text">Todos los derechos reservados &copy; {{ date('Y') }}</p>
                    <p class="navbar-text navbar-right"><b>La Palabra Hablada</b></p>
                </div>
            </div>
        </nav>
    </footer>

    <script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
