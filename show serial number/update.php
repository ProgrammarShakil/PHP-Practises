<?php
    $connection = mysqli_connect('localhost','root','','user');

    if (!($connection)) {
        die('not connected'. mysqli_error($connection));
    } 

    if(isset($_REQUEST['submit'])){
       $username = $_REQUEST['username'];
       $email = $_REQUEST['email'];
       $password = $_REQUEST['password'];
       $hidden_id = $_REQUEST['updating_hidden_id'];


       $update_query = "UPDATE user_info SET username='$username',email='$email',password='$password' WHERE id = $hidden_id";

       $final_update_query = mysqli_query($connection,$update_query);

       if ($final_update_query) {
           header("location: index.php?updated");
       }
    }
    

?>