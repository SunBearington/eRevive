<?php
session_start();
require 'includes/dbconx.php';

if($_POST['registerUsername'] != '' && $_POST['registerPassword'] != ''){
    if($_POST['registerPassword'] === $_POST['confirmPassword']){
      $username = mysqli_real_escape_string($con,$_POST['registerUsername']);
      $email = mysqli_real_escape_string($con,$_POST['registerEmail']);
      $password = mysqli_real_escape_string($con,$_POST['registerPassword']);
      $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
      $sql = "SELECT username FROM users WHERE username = '$username'";
      $result = mysqli_query($con,$sql);
      if(mysqli_num_rows($result) > 0){
        $_SESSION['error'] = "Username already exists. Please choose another username or sign in.";
      }else{
      $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";
      echo $sql;
      if($con->query($sql)=== true){
        $_SESSION['status'] = "Registration Successful. You can now sign in.";
        header ('Location: index.php');
      }else{
        $_SESSION['error'] = "Registration Unsuccessful.";
        header ('Location: index.php');
      };
    }
}else{
  $_SESSION['error'] = "Passwords do not match";
  header ('Location: index.php');
}
}else{
  $_SESSION['error'] = "Please enter a username and password.";
  header ('Location: index.php');
}

echo $_SESSION['error'];
