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

        if (isset($_REQUEST['submit'])){
            $username = $_REQUEST['username'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];


            if ($username && $email && $password ) {
            $connection = mysqli_connect('localhost','root','','user');

            // if ($connection) {
            //     echo "connected";
            // }else{
            //     echo 'not connected'. mysqli_error();
            // }

            if (!($connection)) {
               die('not connected');
            }

            $query = "INSERT INTO user_info (username, email, password) VALUES ('$username','$email','$password')";


            $result = mysqli_query($connection,$query);

            if($result){
                echo "<font color='green'>insert success</font>";
            }
          }else{
              echo "<font color='red'>any field cannot be blank</font>";
          }
        }
        ?>
    <form action="sql.php" method='post'>
      <input type="text" name="username" placeholder="username">
      <input type="email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>