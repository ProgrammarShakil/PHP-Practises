<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="post.php" method='post'>
       <input type="text" name='username' placeholder='username'>
       <input type="email" name='email' placeholder='email'>
       <input type="password" name='password' placeholder='password'>
       <input type="submit" value='submit'>
    </form>
    <?php
     if (isset($_REQUEST['wrong'])){
        echo $_REQUEST['wrong'];
    }
     ?>
</body>
</html>