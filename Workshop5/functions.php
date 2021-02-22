<?php

function getConnection() {
  $connection = new mysqli('localhost:3306', 'root', '', 'usuarios');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}

function getConnection2() {
  $connection = new mysqli('localhost:3306', 'root', '', 'carreras');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}

function saveUser($user) {
  $conn = getConnection();
  $sql = "INSERT INTO user( `nombre`, `apellido`, `usuario`, `contraseña`, `tipo`)
          VALUES ('{$user['name']}', '{$user['lastname']}', '{$user['username']}', '{$user['password']}', 'C')";
  $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}

function authenticate($username, $password){
  $conn = getConnection();
  $sql = "SELECT * FROM user WHERE `usuario` = '$username' AND `contraseña` = '$password'";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return $result->fetch_array();
}

function saveEstudiante($user){
  $connection = getConnection();
  $cedula = $user['cedula'];
  $nombre = $user['nombre'];
  $apellidos = $user['apellidos'];
  $correo = $user['email'];
  $carrera = $user['carrera'];

  $sql = "INSERT INTO matricula(cedula, nombre, apellidos, correo, carrera) VALUES ($cedula,$nombre,$apellidos,$correo,$carrera)";
  mysqli_query($connection, $sql);

  $connection->close();

}

function getCarreras(){
  $conn = getConnection2();
  $sql = "SELECT * FROM carreras";
  $result = $conn->query($sql);
  
  $conn->close();

  return $result->fetch_all();
}

function getMatriculas(){
  $conn = getConnection2();
  $sql = "SELECT * FROM matricula";
  $result = $conn->query($sql);
  
  $conn->close();

  return $result->fetch_all();
}
?>