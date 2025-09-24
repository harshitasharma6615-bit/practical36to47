<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
</head>
<body>
  <h2>Register</h2>
  <form action="" method="POST">
    Username: <input type="text" name="username"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Register">
  </form>
</body>
</html>
<?php
$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

if(empty($username) || empty($email) || empty($password)) {
    echo "All fields are required!";
} else {
    echo "Registration Successful!<br>";
    echo "Username: $username <br>";
    echo "Email: $email <br>";
    echo "Password: ****** (not stored)";
}
?>