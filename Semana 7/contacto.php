<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Queso &amp; Sabor - Contacto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body { background-color: #fffaf0; }
            .bg-dark { background-color: #6b4a08 !important; }
            .bg-warning { background-color: #f0b429 !important; }
            .btn-primary { background-color: #d98e04; border-color: #d98e04; }
            .btn-primary:hover { background-color: #c77800; border-color: #c77800; }
            .btn-warning { background-color: #f7d046; border-color: #f7d046; color: #3a2600; }
            .btn-warning:hover { background-color: #f0b429; border-color: #f0b429; color: #3a2600; }
            .btn-outline-dark { color: #6b4a08; border-color: #6b4a08; }
            .btn-outline-dark:hover { background-color: #6b4a08; border-color: #6b4a08; }
            .card { border-color: #f0b429; }
            .card-title { color: #6b4a08; }
            .precio { color: #c77800; font-weight: bold; }
            .accordion-button:not(.collapsed) { background-color: #fce873; color: #6b4a08; box-shadow: none; }
            .dropdown-item:hover, .dropdown-item:focus { background-color: #fce873; }
            .navbar-brand i, .card-body i { color: #f0b429; }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><i class="fa fa-cutlery"></i> Queso &amp; Sabor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="empresa.php" role="button" data-bs-toggle="dropdown">Empresa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="empresa.php#quienes">Quienes Somos</a></li>
                                <li><a class="dropdown-item" href="empresa.php#mision">Mision</a></li>
                                <li><a class="dropdown-item" href="empresa.php#faq">Preguntas Frecuentes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <form class="d-flex me-2" action="productos.php">
                        <input class="form-control me-2" type="text" name="q" placeholder="Buscar quesos...">
                        <button class="btn btn-outline-light" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">Iniciar sesión</button>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-light">
            <h2 class="text-center mt-4">Contáctanos</h2>
            <p class="text-center text-muted">¿Tienes dudas o pedidos especiales? Escríbenos</p>

            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <h4>Envíanos un mensaje</h4>
                    <form action="contacto.php">
                        <div class="mb-3 mt-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com" name="email">
                        </div>
                        <label for="comment">Mensaje:</label>
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                    </form>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <h4>Información de contacto</h4>
                    <p>
                        <i class="fa fa-phone"></i> +56 9 1234 5678<br>
                        <i class="fa fa-phone"></i> +56 2 2345 6789
                    </p>
                    <p>
                        <i class="fa fa-envelope"></i> contacto@quesoysabor.cl<br>
                        <i class="fa fa-envelope"></i> ventas@quesoysabor.cl
                    </p>
                    <p>
                        <i class="fa fa-map-marker"></i> Av. Los Artesanos 1234, Local 5<br>
                        Providencia, Santiago, Chile
                    </p>
                    <p>
                        <i class="fa fa-clock-o"></i> Lunes a Sábado: 9:00 - 19:00 hrs
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4" style="color:white"><strong>Queso &amp; Sabor@2026</strong></div>
                <div class="col-4"></div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Iniciar sesión</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="contacto.php">
                        <div class="mb-3 mt-3">
                            <label for="loginEmail" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
