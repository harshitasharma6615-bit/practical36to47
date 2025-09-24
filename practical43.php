<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
      <select name="language" id="">
        <option value="PHP"> PHP</option>
        <option value="Java"> Java</option>
        <option value="Python"> Python</option>
        <option value="JavaScript"> Javascript</option>
      </select>
      <input type="submit" value="submit">
    </form>  
</body>
</html>
<?php
  $language=$_GET['language'];
  echo "Your favourite language is $language";
?>