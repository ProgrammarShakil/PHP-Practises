<?php
    $image = $_FILES['image'];

    echo  $name = $image['name'];
    echo "<br>";
    echo $tmp_name = $image['tmp_name'];
    echo "<br>";
    echo  $size = $image['size'];

    if (!empty($name)) {

        $location = "rec file/";

       if( move_uploaded_file($tmp_name,$location.$name )){
           echo " file uploaded";
           $path = $location.$name;
           echo " <img src='$path' width='200' >";
       }else{
           echo " file cannot be uploaded.";
       }
        
    }else{
        echo "File cannot be founded.";
    }



?>