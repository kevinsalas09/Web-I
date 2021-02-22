<?php

include('functions.php');

if($_POST) {
    $connection = getConnection2();
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['email'];
    $carrera = $_POST['carrera'];

    $sql = "INSERT INTO matricula(cedula, nombre, apellidos, correo, carrera) VALUES ('$cedula','$nombre','$apellidos','$correo','$carrera')";
    //$sql = "INSERT INTO matricula(cedula, nombre, apellidos, correo, carrera) VALUES ('207700833', 'Kevin', 'Salas Z', 'kevinaaronsalas@gmail.com', 613)";
    mysqli_query($connection, $sql);

    $connection->close();
  //saveUser($_REQUEST);
}

echo '<script>location.href = "index.php"</script>';

?>