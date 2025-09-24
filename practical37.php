<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="" method="get">
   <label for="">Name</label>
   <input type="text" name="name"> <br> <br>
   <label for="">Age</label>
   <input type="text" name="age"> <br> <br>
   <button>Submit</button>
  </form>
</body>
</html>
<?php
    $name=$_GET['name'];
    $age=$_GET['age']; 
    echo "hello $name you are $age years old.";



?>