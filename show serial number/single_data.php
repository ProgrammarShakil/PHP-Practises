<?php
    $connection = mysqli_connect('localhost','root','','user');

    if (!($connection)) {
        die('not connected'. mysqli_error());
    } 

    if(isset($_REQUEST['edit_id'])){
      $recieved_id = $_REQUEST['edit_id'];

      $get_info = "SELECT * FROM user_info WHERE id = $recieved_id";

      $select_info = mysqli_query($connection,$get_info);

      while( $row = mysqli_fetch_assoc($select_info)){
      
  ?>
    <form action="update.php" method="post">
      <input type="text" name="username" value="<?php echo $row['username']; ?>" Placeholder="Username">
      <input type="email" name="email" value="<?php echo $row['email']; ?>" Placeholder="Email">
      <input type="password" name="password" value="<?php echo $row['password']; ?>" Placeholder="Password">
      <input type="submit" name='submit' value="Update">
      <input type="hidden" name='updating_hidden_id' value='<?php echo $recieved_id?>'>
    </form>
  <?php
      }
    }
?>