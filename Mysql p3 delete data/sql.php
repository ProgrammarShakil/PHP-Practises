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

                if (isset($_REQUEST['deleted'])) {
                    echo "<font color='red'>Data Deleted</font>";
                }

        ?>
        <table border='3' width='100%' style='font-size:22px; text-align:center'>
            <thead style='background:green; color:#fff'>
                <tr>
                <th>ID No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
                </tr>
            </thead>
        
        <?php

            while( $row = mysqli_fetch_assoc($result)){
                // echo print_r($row);
                $db_id = $row['id'];
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];

        ?>

           <tbody style='background:grey; color:#fff'>
                <tr>
                <td><?php echo $db_id ?></td>
                <td><?php echo $username ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $password ?></td>
                <td><a onclick='return confirm("Are you want to sure ?")' href="delete.php?id=<?php echo $db_id ?>">Delete</a></td>
                </tr>
            </tbody>
        <?php

            }
        ?>
        </table>
        <?php

        }else{
            echo "You don't have any data in your Database.";
        }
        
        ?>
</body>
</html>