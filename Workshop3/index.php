<?php
  $message = "";
  if(!empty($_REQUEST['status'])) {
    $message = $_REQUEST['message'];
    // switch($_REQUEST['status']) {
    //   case 'success':
    //     $message = 'User was added succesfully';
    //   break;
    //   case 'error':
    //     $message = 'There was a problem inserting the user';
    //   break;
    // }
  }
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
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <h1>Create Categories</h1>
    <form action="singup.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Description">
      </div>

      <input type="submit" class="btn btn-primary" value="Add"></input>
    </form>
</div>
</body>
</html>