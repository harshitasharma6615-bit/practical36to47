<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">

   enter first number: <input type="number" name="num1" id=""> <br><br>

   enter second number: <input type="number" name="num2" id=""> <br><br>
   <select name="operation" id="">
    <option value="add"> add</option>
     <option value="sub"> sub</option>
      <option value="mul"> mul</option>
       <option value="div"> div</option>
   </select>
   <input type="submit">
    </form>
</body>
</html>
<?php
  $num1=$_GET['num1'];
    $num2=$_GET['num2'];
      $opr=$_GET['operation'];
      switch($opr){
      case "add":
        $result =$num1+$num2;
        echo $result;
         case "sub":
        $result =$num1-$num2;
          echo $result;
           case "mul":
        $result =$num1*$num2;
          echo $result;
          case "div":
        $result =$num1/$num2;
          echo $result;




      }


?>