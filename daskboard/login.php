<?php
session_start(); 
    include "conn.php";
    $name = $_POST["name"];
    $password = $_POST["password"];
    $req="select * from admin where Nom = '$name' and password = '$password'";
    $res=mysqli_query($conn, $req);
    if(mysqli_num_rows($res) === 1) {
        $row = mysqli_fetch_assoc($res);
        if($row['Nom'] === $name && $row['password'] === $password) {
            $_SESSION['Nom'] = $row['Nom'];
            $_SESSION['id'] = $row['IDadmin'];
            header("Location: index.php");
            exit();
        }
    }
?>