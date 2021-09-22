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

            $connection = mysqli_connect('localhost','root','','user');

            if (!($connection)) {
               die('not connected');
            }

            $query = "SELECT * FROM user_info";

            $result = mysqli_query($connection, $query);

            $count = mysqli_num_rows($result);

            if ($count > 0) {

            while( $row = mysqli_fetch_assoc($result)){
                // echo print_r($row);
                echo $row['id'];
                echo "<br>";
            }

        }else{
            echo "You don't have any data in your Database.";
        }
        
        ?>
</body>
</html>