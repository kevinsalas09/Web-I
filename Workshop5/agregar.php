<?php
  require('functions.php');

  if($_POST) {
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $array = array(
        "name" => $name,
        "lastname" => $lastname,
        "username" => $username,
        "password" => $password
    );

    $nuevo = saveUser($array);

 
      echo '<script>location.href = "menu.php?status=saved"</script>';
  }
?>