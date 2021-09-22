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
            $upload_image = $_FILES['upload_image'];

            $img_name = $upload_image['name'];
            $img_tmp_name = $upload_image['tmp_name'];
            $name_changer = uniqid(). ".png";

            if(!empty($img_name)){
                $location ="upload/";
                if(move_uploaded_file($img_tmp_name,$location.$name_changer)){
                    header("location: index.php");
                }else{
                    echo "upload failed.";
                }
            }else{
                echo "Your File is Empty.<br>";
            }



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

            $query = "INSERT INTO user_info (profile_pic,username, email, password) VALUES ('$name_changer','$username','$email','$password')";


            $result = mysqli_query($connection,$query);

            if($result){
                echo "<font color='green'>insert success</font>";
            }
          }else{
              echo "<font color='red'>any field cannot be blank</font>";
          }
        }
        ?>
</body>
</html>