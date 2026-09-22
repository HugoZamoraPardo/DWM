<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Queso &amp; Sabor - Servicios</title>
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
                            <a class="nav-link active" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
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
            <h2 class="text-center mt-4">Nuestros Servicios</h2>
            <p class="text-center text-muted">Además de vender quesos artesanales, ofrecemos</p>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card rounded-0 text-center">
                        <div class="card-body">
                            <i class="fa fa-truck fa-3x mb-3"></i>
                            <h4 class="card-title">Envío a domicilio</h4>
                            <p class="card-text">Despachos refrigerados a todo Chile en 2 a 4 días hábiles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card rounded-0 text-center">
                        <div class="card-body">
                            <i class="fa fa-cutlery fa-3x mb-3"></i>
                            <h4 class="card-title">Tablas personalizadas</h4>
                            <p class="card-text">Armamos tablas de quesos a pedido para eventos y celebraciones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card rounded-0 text-center">
                        <div class="card-body">
                            <i class="fa fa-users fa-3x mb-3"></i>
                            <h4 class="card-title">Degustaciones guiadas</h4>
                            <p class="card-text">Visita nuestra tienda y agenda una degustación con nuestro equipo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card rounded-0 text-center">
                        <div class="card-body">
                            <i class="fa fa-shopping-cart fa-3x mb-3"></i>
                            <h4 class="card-title">Venta al por mayor</h4>
                            <p class="card-text">Precios especiales para restaurantes, hoteles y almacenes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mb-4">
                <a href="contacto.php" class="btn btn-outline-dark">Consultar por un servicio</a>
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
                        <form action="servicios.php">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
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
