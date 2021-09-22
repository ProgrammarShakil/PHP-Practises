<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


echo "database saved information information";
echo "<hr>";
$saved_username = "freelancershakil";
$save_email = "freelancershakil913@gmail.com";
$save_password = "password1234";

echo 'username: '.$saved_username;
echo "<br>";
echo 'email: '.$save_email;
echo "<br>";
echo 'password: '.$save_password;
echo "<br>";
echo "<br>";

 


echo "User input information";
echo "<hr>";

  $username = $_REQUEST['username'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];

  echo 'username: '.$username;
  echo "<br>";
  echo 'email: '.$email;
  echo "<br>";
  echo 'password: '.$password;
  echo "<br>";
  echo "<br>";


  if($saved_username == $username && $save_email == $email && $save_password == $password)
  {
    echo"<font color='green'>Your logged in successfull.</font>";
  }else{
    echo"<font color='red'>Your login Failed.</font>";
  }
?>
</body>
</html>