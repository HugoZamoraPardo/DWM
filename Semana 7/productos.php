<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Queso &amp; Sabor - Productos</title>
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
                            <a class="nav-link active" href="productos.php">Productos</a>
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

            <h2 class="text-center mt-4">Nuestro Catálogo</h2>
            <p class="text-center text-muted">Filtra por nombre para encontrar tu queso favorito</p>

            <?php
                $productos = array(
                    array("img/chanco.jpg", "Queso Chanco Artesanal", "Suave y cremoso, madurado 30 días.", "$6.500 / kg"),
                    array("img/cabra.jpg", "Queso de Cabra", "Sabor intenso, ideal para tablas.", "$8.900 / kg"),
                    array("img/mantecoso.jpg", "Queso Mantecoso", "Textura suave, perfecto para fundir.", "$5.900 / kg"),
                    array("img/azul.jpg", "Queso Azul Artesanal", "Madurado con cultivos nobles.", "$11.200 / kg"),
                    array("img/tabla.jpg", "Tabla de Quesos Surtida", "5 variedades + frutos secos.", "$14.500"),
                    array("img/parmesano.jpg", "Queso Parmesano", "Curado 12 meses, sabor intenso.", "$12.900 / kg"),
                    array("img/gouda.jpg", "Queso Gouda Ahumado", "Ahumado artesanalmente con leña.", "$9.300 / kg"),
                    array("img/crema.jpg", "Queso Crema Natural", "Untable, ideal para el desayuno.", "$4.200")
                );

                $busqueda = isset($_GET['q']) ? trim($_GET['q']) : "";

                if ($busqueda !== "") {
                    $resultado = array();
                    foreach ($productos as $producto) {
                        if (stripos($producto[1], $busqueda) !== false) {
                            $resultado[] = $producto;
                        }
                    }
                } else {
                    $resultado = $productos;
                }
            ?>

            <form class="row justify-content-center mb-4" action="productos.php">
                <div class="col-12 col-md-5">
                    <input type="text" class="form-control" name="q" placeholder="Ej: cabra, azul, mantecoso..." value="<?php echo htmlspecialchars($busqueda); ?>">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-warning">Buscar</button>
                </div>
            </form>

            <div class="container-fluid">
                <div class="row">
                    <?php if (count($resultado) === 0) { ?>
                        <div class="col-12">
                            <div class="alert alert-warning text-center">No se encontraron quesos que coincidan con "<?php echo htmlspecialchars($busqueda); ?>".</div>
                        </div>
                    <?php } ?>

                    <?php foreach ($resultado as $producto) { ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                            <div class="card rounded-0">
                                <img class="card-img-top rounded-0" src="<?php echo $producto[0]; ?>" alt="<?php echo $producto[1]; ?>" style="object-fit: cover; height: 180px;">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $producto[1]; ?></h4>
                                    <p class="card-text"><?php echo $producto[2]; ?></p>
                                    <p class="card-text precio"><?php echo $producto[3]; ?></p>
                                    <a href="#" class="btn btn-primary">Agregar</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
                        <form action="productos.php">
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
