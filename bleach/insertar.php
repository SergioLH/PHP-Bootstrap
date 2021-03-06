<?php
include('config/db_connect.php');

$conn = OpenCon();

$nombre = $estado = $nivel_arma = $nivel_ropa = $nivel_libro = $nivel_talisman = '';

$ERRORS = array('nombre' => '', 'estado' => '', 'nivel_arma' => '', 'nivel_ropa' => '',
    'nivel_libro' => '', 'nivel_talisman' => '');
if (isset($_POST['insertar'])) {
    $nombre = $_POST['nombre'];
    $estado = $_POST['estado'];
    $nivel_arma = $_POST['nivel_arma'];
    $nivel_ropa = $_POST['nivel_ropa'];
    $nivel_libro = $_POST['nivel_libro'];
    $nivel_talisman = $_POST['nivel_talisman'];

    if (!array_filter($ERRORS)) {
        $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
        $estado = mysqli_real_escape_string($conn, $_POST['estado']);
        $nivel_arma = mysqli_real_escape_string($conn, $_POST['nivel_arma']);
        $nivel_ropa = mysqli_real_escape_string($conn, $_POST['nivel_ropa']);
        $nivel_libro = mysqli_real_escape_string($conn, $_POST['nivel_libro']);
        $nivel_talisman = mysqli_real_escape_string($conn, $_POST['nivel_talisman']);

        $sql = "INSERT INTO personajes(nombre, estado, equipo_arma, equipo_ropa, equipo_libro, equipo_talisman) VALUES ('$nombre', '$estado','$nivel_arma', '$nivel_ropa', '$nivel_libro', '$nivel_talisman')";

        if (mysqli_query($conn, $sql)) {
            header('Location: index.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE HTML>
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
            <a class="navbar-brand" href="index.php">Bleach Immortal Soul</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" aria-current="page">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Insertar</a>
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
                <h1 class="h2">Insertar personaje nuevo</h1>
            </div>
            <div class="row row-cols-4 row-cols-md-4 mb-3">
                <div class="col-md-7 col-lg-7">
                    <h4 class="mb-3">Introduzca los datos</h4>
                    <form class="needs-validation" action="insertar.php" method="POST">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                       value="<?php echo htmlspecialchars($nombre) ?>" required autofocus>
                            </div>
                            <div class="col-sm-6">
                                <label for="estado" class="form-label">Nivel Estado</label>
                                <input type="text" class="form-control" name="estado" id="estado"
                                       value="<?php echo htmlspecialchars($estado) ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="arma" class="form-label">Nivel Arma</label>
                                <input type="text" class="form-control" name="nivel_arma" id="arma"
                                       value="<?php echo htmlspecialchars($nivel_arma) ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="ropa" class="form-label">Nivel Ropa</label>
                                <input type="text" class="form-control" name="nivel_ropa" id="ropa"
                                       value="<?php echo htmlspecialchars($nivel_ropa) ?>"
                                       required>
                            </div>
                            <div class="col-6">
                                <label for="libro" class="form-label">Nivel Libro</label>
                                <input type="text" class="form-control" name="nivel_libro" id="libro"
                                       value="<?php echo htmlspecialchars($nivel_libro) ?>" required>
                            </div>
                            <div class="col-6">
                                <label for="talisman" class="form-label">Nivel Talisman</label>
                                <input type="text" class="form-control" name="nivel_talisman" id="talisman"
                                       value="<?php echo htmlspecialchars($nivel_talisman) ?>" required>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-outline-dark btn-lg" type="submit" name="insertar">
                            Insertar nuevo personaje
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
</body>

<?php include('templates/footer.php'); ?>

<script src=" js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
</html>
