<?php
  if($_POST) {
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    
    $sql = "INSERT INTO categorias(nombre, descripcion) VALUES ('$name','$description')";

    $connection = mysqli_connect('localhost', 'root', '', 'categorias');
    
    mysqli_query($connection, $sql);
    
    mysqli_close($connection);
    echo '<script>location.href = "index.php"</script>';
  } else {
    echo '<script>location.href = "index.php"</script>';
  }
?>