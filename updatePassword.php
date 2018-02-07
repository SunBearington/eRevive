<!doctype html>

<html lang="en">
<head>
<?php
session_start();
require('includes/dbconx.php');
?>
    <meta charset="utf-8">
    <title>eRevive</title>
    <meta name="description" content="eRevive - Recycle your unwanted electronic goods today">
    <meta name="author" content="SunBearington">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1>eRevive</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2 left">
    </div>
    <div class="col-md-8 center">
      <p>
        <?php
        $email = $_GET['email'];
        $_SESSION['email'] = $email;
        if(isset($_SESSION['status'])){
          echo $_SESSION['status'];
          unset($_SESSION['status']);
        }else if(isset($_SESSION['error'])){
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }else{
          if(isset($_SESSION['password'])){
          echo $_SESSION['password'];
          unset($_SESSION['password']);
        }
      }
        ?>
    </p>
        <div class="form-group">
            <form class="form passwordReset" action="password.php" method="post">
                <label for="password">Temporary Password: </label>
                <input class="form-control" type="password" name="password">
                <label for="newPassword">New Password: </label>
                <input class="form-control" type="password" name="newPassword">
                <label for="confirmPassword">Confirm Password: </label>
                <input class="form-control" type="password" name="confirmPassword">
                <input class="form-control btn btn-control" type="submit" name="submit" value="Update Password">
            </form>
        </div>
    </div>
    <div class="col-md-2 right">
    </div>
  </div>
</body>
</html>
