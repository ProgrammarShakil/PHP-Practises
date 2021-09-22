<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>


    <form action="" method='post'>
      <input type="text" name="search_name" placeholder="Search">
      <input type="submit" name="search" value="search">
    </form>

    <br>

        <?php

            $connection = mysqli_connect('localhost','root','','user');

            if (!($connection)) {
                  die('not connected');
            }


            if(isset($_REQUEST['search_name'])){
                $rec_search_name = $_REQUEST['search_name'];

                echo 'Search Result For : ' . $rec_search_name ;


            $query = "SELECT * FROM user_info WHERE username LIKE '%$rec_search_name%'";

            $result = mysqli_query($connection, $query);

            $count = mysqli_num_rows($result);

            if ($count > 0) {

                if (isset($_REQUEST['deleted'])) {
                    echo "<font color='red'>Data Deleted.</font>";
                }
                if (isset($_REQUEST['updated'])) {
                    echo "<font color='green'>Data Updated.</font>";
                }

        ?>

        <table border='3' width='100%' style='font-size:22px; text-align:center'>
            <thead style='background:green; color:#fff'>
                <tr>
                <th>Serial No.</th>
                <th>ID No.</th>
                <th>Profile Picture</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
                </tr>
            </thead>
        
        <?php

        $serial = 0;

            while( $row = mysqli_fetch_assoc($result)){
                // echo print_r($row);
                $db_id = $row['id'];
                $db_img = $row['profile_pic'];
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
                $serial++;

        ?>

           <tbody style='background:grey; color:#fff'>
                <tr>
                <td><?php echo $serial ?></td>
                <td><?php echo $db_id ?></td>
                <td><img src="upload/<?php echo $db_img; ?>" width="50"></td>
                <td><?php echo $username ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $password ?></td>
                <td> <a href="single_data.php?edit_id=<?php echo $db_id ?>">Edit </a>&nbsp;||&nbsp; <a onclick='return confirm("Are you want to sure ?")' href="delete.php?id=<?php echo $db_id ?>&profile_pic=<?php echo $db_img ?>"> Delete</a></td>
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
    }
          
        
        ?>
        
</body>
</html>