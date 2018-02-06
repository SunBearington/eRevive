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
            <?php
            if(isset($_SESSION['username'])){
            include 'includes/secureHeader.php';
            }else{
            include 'includes/header.php';
            }
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2 left">
    </div>
    <div class="col-md-8 center">
      <p>
        <?php
        if(isset($_SESSION['status'])){
          echo $_SESSION['status'];
          unset($_SESSION['status']);
        }else{if(isset($_SESSION['error'])){
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
      }
        ?>
    </p>
        <div class="form-group">
            <form class="form-inline search" action="search.php" method="post">
                <label for="term">Search The Store: </label>
                <input class="form-control" type="text" name="term">
                <select class="form-control">
                    <option value="Phones/Tablets">Phones/Tablets</option>
                    <option value="Computers/Laptops">Computers/Laptops</option>
                    <option value="Games/Consoles">Games/Consoles</option>
                    <option value="Household Electricals">Household Electricals</option>
                </select>
                <input class="form-control btn btn-control" type="submit" name="search" value="Search...">
            </form>
        </div>
    </div>
    <div class="col-md-2 right">
    </div>
  </div>

  <!-- Registration Modal Starts Here-->
<div id="registerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register for eRevive</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <form class=form action="register.php" method="post">
          <label for="registerUsername">Username:</label><input class="form-control" name="registerUsername" id="registerUsername" type="text" required>
          <label for="reisterPassword">Password:</label><input class="form-control" name="registerPassword" id="registerPassword" type="password" required>
          <label for="confirmPassword">Confirm Password:</label><input class="form-control" name="confirmPassword" id="confirmPassword" type="password" required>
          <label for="registerEmail">E-Mail:</label><input class="form-control" name="registerEmail" id="registerEmail" type="email" required>
          <input class="form-control btn btn-control" type="submit" name="register" id="registerSubmit" value="Submit">
          <input class="form-control btn btn-control" type="reset" name="reset" id="registerReset" value="Reset">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!--Registration Modal Ends Here -->






<script src="js/scripts.js"></script>
</body>
</html>
