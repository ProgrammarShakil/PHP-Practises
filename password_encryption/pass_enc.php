<?php
echo $username = $_REQUEST['username'];
echo "<br>";
echo $email = $_REQUEST['email'];
echo "<br>";
     $password = $_REQUEST['password'];
 
 $hash_format = "$2y$7$";
 $salt = "asdfg345636d4fg56";
 $conC = '$hash_format' . '$salt';
 echo $password;
 echo "<br>";
 echo crypt($password, $conC);
?>
