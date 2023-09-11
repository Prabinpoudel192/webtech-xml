
<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['password'])){
} 
else{
    header("location:data.php");
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
    <div class="pra6">
        <table border="1">
            <tr><td class="pra7">Data Displayed</td></tr>
            <tr>
                <td class="pra8">
                    
                    <?php 
                     echo "Name:".$_SESSION['name']."<br>";
                     echo "Email: " . $_SESSION['email'] . "<br>";
                     echo "Password:".$_SESSION['password']."<br>";
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
