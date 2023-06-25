<?php

session_start();

$conn=mysqli_connect('localhost', 'root', '', 'login');

$username = $_POST['username'];
$password = $_POST['password'];

$fetch="SELECT * FROM `users` WHERE `username`='".$username."' AND `password`='".$password."' ";
$row=mysqli_query($conn, $fetch);
  if (mysqli_num_rows($row)==1) {

    $_SESSION['log']=12;
    header("location:index.php");
} else {
  echo 'Invalid username or password!';
  echo '<br><br><br><br><a href="login.php" >Back to login page</a>';
}

?>

<!-- echo '<script>alert("Login Successfully")<script>'; -->


