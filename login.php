<?php
require ('includes/dbconx.php');
session_start();

$username = mysqli_real_escape_string($_POST['username']);
$password = mysqli_real_escape_string($_POST['password']);

$sql = "SELECT username, password FROM users WHERE username = '$username'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  while($row = $result->fetch_assoc()){
    if(password_verify($password,$row['password'])){
      $_SESSION['username'] = $username;
      header ('Location:index.php');
    }else{
      $_SESSION['error'] = "Invalid Password.";
      header ('Location:index.php');
    }
  }
}else{
  $_SESSION['error'] = "Username Does Not Exist" . $username;
  header ('Location:index.php');
}
