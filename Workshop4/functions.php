<?php

/**
 *  Gets a new mysql connection
 */
function getConnection() {
  $connection = new mysqli('localhost:3306', 'root', '', 'usuarios');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}

/**
 * Inserts a new student to the database
 *
 * @student An associative array with the student information
 */
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

/**
 * Get one specific student from the database
 *
 * @id Id of the student
 */
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
?>