<?php
session_start();

$user = $_SESSION['user'];
if (!$user) {
    header('Location: /index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">UTN ISW613</a>
        <form class="form-inline">
            <a class="btn btn-primary" href="logout.php">Logout</a>
        </form>
    </nav>
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 shadow-lg p-3 mb-5 bg-white rounded ">
                <h1 style="text-align: center;"> Bienvenido <?php echo $user['nombre'] . " " . $user['apellido'] ?> </h1>
                <?php if ($user['tipo'] === 'A') { ?>
                    <h2 style="text-align: center;">Add User</h2>
                    <form action="agregar.php" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

                    </form>

                <?php }
                ?>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
</body>

</html>