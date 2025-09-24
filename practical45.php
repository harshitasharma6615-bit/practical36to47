<?php
$score = 0;

// Check if form is submitted

    if (isset($_POST['q1'])  == "A") {
        $score++;
      
    }
    if (isset($_POST['q2']) == "C") {
        $score++;
    }
    if (isset($_POST['q3'])  == "B") {
        $score++;
    }

    echo "<h2>Your Score: $score / 3</h2>";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Quiz</title>
</head>
<body>
    <h1>Online Quiz</h1>
    <form method="post" action="">
        <h3>1. What is the capital of India?</h3>
        <input type="radio" name="q1" value="A"> New Delhi<br>
        <input type="radio" name="q1" value="B"> Mumbai<br>
        <input type="radio" name="q1" value="C"> Kolkata<br>

        <h3>2. 2 + 2 = ?</h3>
        <input type="radio" name="q2" value="A"> 3<br>
        <input type="radio" name="q2" value="B"> 5<br>
        <input type="radio" name="q2" value="C"> 4<br>

        <h3>3. Which is a programming language?</h3>
        <input type="radio" name="q3" value="A"> HTML<br>
        <input type="radio" name="q3" value="B"> Python<br>
        <input type="radio" name="q3" value="C"> CSS<br>

        <br>
        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>