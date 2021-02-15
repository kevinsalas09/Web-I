<?php

function getConnection() {
    $connection = new mysqli('localhost:3306', 'root', '', 'carreras');
    if ($connection->connect_errno) {
      printf("Connect failed: %s\n", $connection->connect_error);
      die;
    }
    return $connection;
  }

/**
 * Saves an specific user into the database
 */
function saveUser($user){
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
    $conn = getConnection();
    $sql = "SELECT * FROM carreras";
    $result = $conn->query($sql);
    
    $conn->close();

    return $result->fetch_all();
  }

function getMatriculas(){
    $conn = getConnection();
    $sql = "SELECT * FROM matricula";
    $result = $conn->query($sql);
    
    $conn->close();

    return $result->fetch_all();
  }
