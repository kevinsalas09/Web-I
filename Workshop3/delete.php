<?php
    $id = $_GET["id"];
    echo $id;
    $sql = "DELETE FROM categorias WHERE id = '$id'";
    $connection = new mysqli('localhost:3306', 'root', '', 'categorias');
    $result = $connection->query($sql);
    $connection->close();
    echo '<script>location.href = "list.php"</script>';
?>