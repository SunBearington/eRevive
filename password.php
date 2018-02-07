<?php
require('includes/dbconx.php');
session_start();

$password = mysqli_real_escape_string($con,trim($_POST['password']));

if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  $sql = "SELECT username, password, email FROM users WHERE email = '$email'";
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      if(password_verify($password,$row['password']) && $_POST['newPassword'] === $_POST['confirmPassword']){
        $password = password_hash($_POST['newPassword'],PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password = '$password' WHERE email = '$email'";
        if(mysqli_query($con,$sql)){
          $_SESSION['status'] = "Password Updated Successfully";
          header ('Location: index.php');
        }else{
          $_SESSION['error'] = "There was an error updating your password. Please try again later.";
          header ('Location: index.php');
          }
        }else{
          echo $password;
          echo $row['password'];
          $_SESSION['error'] = "Something went wrong.";
          //header ('Location: index.php');
        }
      }
    }
  }
?>
