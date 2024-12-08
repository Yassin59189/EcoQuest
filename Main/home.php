<?php
include "conn.php";
session_start();
if(isset($_SESSION["name"]) && isset($_SESSION["id"])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo($_SESSION["name"]); ?></h1>

    <a href="logout.php">Sign out</a>
</body>
</html>


<?php
} else {
    header("Location: login.php");
}
?>