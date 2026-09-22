<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Queso &amp; Sabor - Empresa</title>
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
                            <a class="nav-link dropdown-toggle active" href="empresa.php" role="button" data-bs-toggle="dropdown">Empresa</a>
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

        <div class="container-fluid bg-warning">

            <div id="quienes" class="pt-4">
                <h2>Quienes Somos</h2>
                <p>Queso &amp; Sabor es una empresa familiar dedicada a la elaboración artesanal
                de quesos desde hace más de 15 años, usando leche fresca de productores
                locales y recetas tradicionales.</p>
            </div>

            <div id="mision" class="pt-3">
                <h2>Misión</h2>
                <p>Llevar a cada mesa quesos artesanales de calidad, elaborados de forma
                responsable y cercana, apoyando a los productores lecheros de la zona.</p>
            </div>

            <div id="faq" class="pt-3 pb-4">
                <h2>Preguntas Frecuentes</h2>

                <div class="accordion" id="acordeonFaq">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Hacen despachos a regiones?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#acordeonFaq">
                            <div class="accordion-body">
                                Sí, realizamos envíos a todo Chile mediante courier refrigerado en un plazo de 2 a 4 días hábiles.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Los productos son 100% naturales?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#acordeonFaq">
                            <div class="accordion-body">
                                Todos nuestros quesos se elaboran con leche fresca, sin conservantes artificiales.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Puedo visitar la tienda física?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#acordeonFaq">
                            <div class="accordion-body">
                                Claro, te esperamos en Av. Los Artesanos 1234, Local 5, Providencia, de lunes a sábado entre 9:00 y 19:00 hrs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="index.php">Volver</a>
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
                        <form action="empresa.php">
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
