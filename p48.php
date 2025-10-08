<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practical 48</title>
</head>
<body>
   <form method="post">
        Name:<input type="text" name="name"><br><br>
        <input type="submit" name="sb">
   </form>
</body>
</html>
<?php
  
  if(isset($_POST['sb'])){
    $name =$_POST['name'];


  //CREATING A COOKIE...

   setcookie($username, $name, time() + 30);
    echo "cookie set successfully!";

  }
  //READ THE COOKIE...
   if(isset($_COOKIE['username'])){
    $name= $_COOKIE['username'];

    echo "WELCOME BACK, $username!";
   }?>
  