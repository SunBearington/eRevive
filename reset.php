<?php
require ('includes/dbconx.php');
session_start();

$username = mysqli_real_escape_string($con,$_POST['username']);
$sql = "SELECT username, password, email FROM users WHERE username = '$username'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  while($row = $result->fetch_assoc()){
    $_SESSION['email'] = $row['email'];
    randomPassword();
    $password = password_hash($_SESSION['password'],PASSWORD_DEFAULT);
    $sql = "UPDATE users SET password = '$password' WHERE username = '$username'";
    if(mysqli_query($con,$sql)){
      email();
      $_SESSION['status'] = "Password Reset Email has been sent.";
      header('Location:updatePassword.php');
    }
  }
}else{
  $_SESSION['error'] = "Username not found. Please Register.";
  header('Location:index.php');
}
function randomPassword() {
    $alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9"];
    $pass = "";
    for ($i = 0; $i < 6; $i++) {
        $n = rand(0, count($alphabet)-1);
        $pass .= $alphabet[$n];
        $_SESSION['password'] = $pass;
    }
}

function email(){
  $msg = "Your password has been reset. Your new password is: <h2>". $_SESSION['password'] . "</h2> Please use the following link to update your password: <a href='localhost/eRevive/updatePassword.php?email='".$_SESSION['email'].">Link</a>";
  mail($_SESSION['email'],"eRevive Password Reset",$msg);
}

?>
