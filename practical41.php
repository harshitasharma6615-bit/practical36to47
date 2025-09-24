<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="">
     Email:  <input type="text" name="email"> <br> <br>
     <input type="password" name="password" id="">
     <input type="submit" value="submit">
     </form>
</body>
</html>
<?php
          $email=$_GET['email'];
           $password=$_GET['password'];
           if($email=="anushka@gmail.com"&&$password="1234"){
            echo "login successfull";
           }
           else{
            echo "invalid email or password";
           }


?>