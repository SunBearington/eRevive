<!doctype html>

<html lang="en">
<head>
<?php
session_start();
require('includes/dbconx.php');
$_SESSION['username'] = "";
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
            if($_SESSION['username'] != ""){
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






<script src="js/scripts.js"></script>
</body>
</html>