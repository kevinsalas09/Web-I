<?php
session_start();

$user = $_SESSION['user'];
if (!$user) {
    echo '<script>location.href = "index.php"</script>';
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php
include('functions.php');
$carreras = getCarreras();
?>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">UTN ISW613</a>
        <form class="form-inline">
            <a class="btn btn-primary" href="logout.php">Logout</a>
        </form>
    </nav>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4">Matrícula</h1>
            <p class="lead">UTN 2021</p>
            <hr class="my-4">
        </div>
        <form method="post" action="save.php">
            <div class="form-group">
                <label for="cedula">Cédula</label>
                <input id="cedula" class="form-control" type="text" name="cedula">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input id="apellidos" class="form-control" type="text" name="apellidos">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label for="carrera">Carrera</label>
                <select id="carrera" class="form-control" name="carrera">
                    <?php
                    foreach ($carreras as $carrera) {
                        echo "<option value=\"$carrera[1]\">$carrera[2]</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"> Sign up </button>
            <a class="btn btn-outline-primary" href="mostrar.php" role="button">List</a>
            <!-- <input type="submit" class="btn btn-primary" value="Sign up"></input> -->
        </form>
    </div>

</body>

</html>