<?php
  // get all users from the database
  $sql = 'SELECT * FROM categorias';
  $connection = new mysqli('localhost:3306', 'root', '', 'categorias');
  $result = $connection->query($sql);
  $users = $result->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>

<title>Document</title>
</head>
<body>
<div class="container">
  <?php require ('header.php') ?>
  <h1>List of Users</h1>
    <table class="table table-light">
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
      <tbody>
        <?php
          // loop users
            foreach($users as $user) {
              echo "<tr><td>".$user[0]."</td><td>".$user[1]."</td><td><a href=\"delete.php?id=".$user[2]."\">Delete</a></td></tr>";
            }
        ?>
      </tbody>
    </table>
    <?php

  $connection->close();
?>
</div>
</body>
</html>