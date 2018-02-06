<?php
session_start();
require 'includes/dbconx.php';

if(isSet($_POST['registerUsername']) && isSet($_POST['registerPassword'])){
    if($_POST['registerPassword'] === $_POST['confirmPassword']){
      $username = trim($_POST['registerUsername']);
      $email = trim($_POST['registerEmail']);
      $password = trim($_POST['registerPassword']);
      $hashedPassword = password_hash($password);
      $sql = "SELECT username FROM users WHERE username = $username"
      $result = $con->query($sql);
      if($result->num_rows>0){
        $_SESSION['error'] = "Username already exists. Please choose another username or sign in.";
      }else{
      $sql = "INSERT INTO users (username, password, email) VALUES ($username, $hashedPassword, $email)"
      if($con->query($sql)=== true){
        $_SESSION['status'] = "Registration Successful. You can now sign in."
      }else{
        $_SESSION['error'] = "Registration Unsuccessful."
      }
    }else{
      $_SESSION['error'] = "Passwords do not match";
    }
}else{
  $_SESSION['error'] = "Please enter a username and password."
}
}
