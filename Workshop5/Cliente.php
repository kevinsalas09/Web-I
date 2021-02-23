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
            <h1 class="display-4"><?php echo "Hola ".$user['nombre']." ".$user['apellido'] ?></h1>
            <p class="lead">UTN 2021</p>
            <hr class="my-4">
        </div>
    </div>

</body>

</html>