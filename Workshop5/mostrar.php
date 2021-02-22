<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>

<title>Document</title>
</head>
<?php
  include('functions.php');

  $matriculas = getMatriculas();


?>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">UTN ISW613</a>
        <form class="form-inline">
            <a class="btn btn-primary" href="menu.php">Volver</a>
        </form>
    </nav>
<div class="container">
  <h1>List</h1>
    <table class="table table-light">
      <tr>
        <th>Cédula</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Carrera</th>
        <th>Fecha</th>
      </tr>
      <tbody>
        <?php
          // loop users
            foreach($matriculas as $matricula) {
              echo "<tr><td>".$matricula[0]."</td><td>".$matricula[1]." ".$matricula[2]."</td><td>".$matricula[3]."</td><td>".$matricula[4]."</td><td>".$matricula[5]."</td></tr>";
            }
        ?>
      </tbody>
    </table>
</div>
</body>
</html>