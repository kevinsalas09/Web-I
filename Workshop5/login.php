<?php
  require('functions.php');

  if($_POST) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $user = authenticate($username, $password);

    if($user) {
      session_start();
      $_SESSION['user'] = $user;
      if($user['tipo'] == 'A' ){
        echo '<script>location.href = "menu.php"</script>';
      }
      else {
        echo '<script>location.href = "Cliente.php"</script>';
      }
    } else {
        echo '<script>location.href = "index.php?status=login"</script>';
    }
  }
