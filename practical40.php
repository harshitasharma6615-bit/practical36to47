<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="get">
     <label for="name">Name:</label>
     <input type="text" name="name" id=""> <br> <br>
       <input type="submit" value="submit">
</form>

     <?php
    $name =$_GET["name"];
    echo "Welcome $name";

?>
</body>
</html>
