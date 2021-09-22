<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
      $name = "user";
      $value = "shakil";
      setcookie( $name, $value, time()+20);

      if (isset($_COOKIE['user'])) {
        echo $_COOKIE['user'];
      }else{
          echo "cookie is not set.";
      }
    
    ?> -->

 <?php
      $_SESSION['user'] = "web developer shakil";
      
 ?>
</body>
</html>