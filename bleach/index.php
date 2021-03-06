<?php
include('config/db_connect.php');

$conn = OpenCon();
$sql = 'SELECT nombre, equipo_arma, equipo_ropa, equipo_libro, equipo_talisman, estado, id FROM personajes';
$result = mysqli_query($conn, $sql);
$personajes = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Bleach Immortal Soul</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-bottom/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/navbar-top-fixed.css" rel="stylesheet">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Bleach Immortal Soul</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insertar.php">Insertar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Modificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eliminar</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Detalles de los personajes</h1>
            </div>
            <div class="row row-cols-4 row-cols-md-4 mb-3 text-center">
                <?php foreach ($personajes as $personaje) : ?>
                    <div class="col">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h3 class="my-0 fw-normal"><?php echo htmlspecialchars($personaje['nombre']); ?></h3>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title pricing-card-title">Estado: <small class="text-muted">
                                        <?php echo htmlspecialchars($personaje['estado']); ?></small>
                                </h5>
                                <ul class="list-group list-group-flush mt-3 mb-4">
                                    <li class="list-group-item">Nivel Arma:
                                        <?php echo htmlspecialchars($personaje['equipo_arma']); ?>
                                    </li>
                                    <li class="list-group-item">Nivel Ropa:
                                        <?php echo htmlspecialchars($personaje['equipo_ropa']); ?>
                                    </li>
                                    <li class="list-group-item">Nivel Libro:
                                        <?php echo htmlspecialchars($personaje['equipo_libro']); ?>
                                    </li>
                                    <li class="list-group-item">Nivel Talisman:
                                        <?php echo htmlspecialchars($personaje['equipo_talisman']); ?>
                                    </li>
                                </ul>
                                <a type="button" class="w-100 btn btn-lg btn-dark"
                                   href="modificar.php?id=<?php echo $personaje['id'] ?>">Modificar personaje</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</div>
</body>

<!--Footer solo para el index debido al tamaño de la pantalla-->
<footer class="footer mt-auto py-3 bg-light bg-dark">
    <div class="container">
        <span class="text-muted ">&copy; Copyright Tonterias de Sergio - 2021</span>
    </div>
</footer>

<script src=" js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
</html>
