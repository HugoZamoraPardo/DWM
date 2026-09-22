<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Queso &amp; Sabor - Inicio</title>
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
                            <a class="nav-link active" href="index.php">Inicio</a>
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

        <div class="container-fluid bg-light">

            <div class="bg-warning text-center py-1">
                <small>Envío gratis en compras sobre $30.000 | Quesos 100% artesanales</small>
            </div>

            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/hero-1.jpg" alt="Quesos artesanales" class="d-block w-100" style="object-fit: cover; height: 400px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Quesos artesanales, tradición en cada bocado</h5>
                            <p>Elaborados a mano con leche de productores locales.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/hero-2.jpg" alt="Quesos madurados" class="d-block w-100" style="object-fit: cover; height: 400px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Nueva línea de quesos madurados</h5>
                            <p>Descubre sabores intensos curados por más de 6 meses.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/hero-3.jpg" alt="Promoción del mes" class="d-block w-100" style="object-fit: cover; height: 400px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Promoción del mes</h5>
                            <p>20% de descuento en tablas de quesos surtidas.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <h2 class="text-center mt-4">Nuestros Productos</h2>
            <p class="text-center text-muted">Una selección de nuestros quesos artesanales más populares</p>

            <div class="container-fluid">
                <div class="row">
                    <?php
                        $destacados = array(
                            array("img/chanco.jpg", "Queso Chanco Artesanal", "Suave y cremoso, madurado 30 días.", "$6.500 / kg"),
                            array("img/cabra.jpg", "Queso de Cabra", "Sabor intenso, ideal para tablas.", "$8.900 / kg"),
                            array("img/mantecoso.jpg", "Queso Mantecoso", "Textura suave, perfecto para fundir.", "$5.900 / kg"),
                            array("img/azul.jpg", "Queso Azul Artesanal", "Madurado con cultivos nobles.", "$11.200 / kg"),
                            array("img/tabla.jpg", "Tabla de Quesos Surtida", "5 variedades + frutos secos.", "$14.500")
                        );

                        foreach ($destacados as $producto) {
                            echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">';
                            echo '<div class="card rounded-0">';
                            echo '<img class="card-img-top rounded-0" src="' . $producto[0] . '" alt="' . $producto[1] . '" style="object-fit: cover; height: 180px;">';
                            echo '<div class="card-body">';
                            echo '<h4 class="card-title">' . $producto[1] . '</h4>';
                            echo '<p class="card-text">' . $producto[2] . '</p>';
                            echo '<p class="card-text precio">' . $producto[3] . '</p>';
                            echo '<a href="#" class="btn btn-primary">Agregar</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="text-center mb-4">
                    <a href="productos.php" class="btn btn-outline-dark">Ver todos los productos</a>
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
                        <form action="index.php">
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
