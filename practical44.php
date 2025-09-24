<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <form action="">
     Name: <input type="text" name="name" id=""> <br> <br>
      Email: <input type="email" namee="email" id=""><br> <br>
      Message: <textarea name="messages" id="" rows="3"></textarea> <br> <br>
   <input type="submit" value="submit">
</form>
</body>
</html>

<?php
  $name=$_GET['name'];
  echo " Thank you $name we will your feedback has been submitted";
?>