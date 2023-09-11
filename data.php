<?php
session_start();
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("location: print.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="data.php">
    <div class="pra">
    
    <table border="1" class="pra1">
     <tr><td colspan="2"><h1>Registration Form</h1></td></tr>
     <tr><td class="pra3">Name:</td><td ><input type="text" name="name" placeholder="Enter your name" class="pra4"></td></tr><br>
     <tr><td class="pra3">Email:</td><td ><input type="email" name="email" placeholder="Enter your email" class="pra4"></td></tr><br>
     <tr><td class="pra3">Password:</td><td ><input type="password" name="password" placeholder="Enter your password" class="pra4"></td></tr><br>
     <tr><td colspan="2"><input type="submit" name="submit" value="login" class="pra5"></td></tr>
</table>
</div>
</form>
</body>
</html>
