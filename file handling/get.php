
<?php
   $image = $_FILES['image'];
   echo "<pre>";
   var_dump($image); // can't echo...
   echo "</pre>";

   echo $name = $image['name'];
   echo "<br>";
   echo $type = $image['type'];
   echo "<br>";
   echo $tmp_name = $image['tmp_name'];
   echo "<br>";
        $size = $image['size'];
   echo floor($size/1000). " KB";
   
   if(!empty($name)){
    $location = "New folder/";
    if(move_uploaded_file($tmp_name, $location.$name)){
      echo "<font color='green'> file upload successfull</font> ";
      $path = $location.$name;
      echo "<br><img src='$path' height='400' width='500'>";
    }else{
      echo "failed";
    }

   }else{
    echo "<br>";
    echo "file not founded.";
   }

?>