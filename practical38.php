<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="" method="get">
   <label for="">num1</label>
   <input type="number" name="num1"> <br> <br>
   <label for="">num2</label>
   <input type="number" name="num2"> <br> <br>
   <button>Submit</button>
  </form>
</body>
</html>
<?php
    $num1=$_GET['num1'];
    $num2=$_GET['num2']; 
    $sum=$num1+$num2;
    echo "sum of $num1 + $num2 = $sum";



?>