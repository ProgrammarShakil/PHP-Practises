<?php
 $username = $_REQUEST['username'];
 $email = $_REQUEST['email'];
 $password = $_REQUEST['password'];

 $count = strlen($password);

  if (!($count >= 8 && $count <= 12)){
    header("location: index.php?wrong= Your Password is wrong.");
  }
?>