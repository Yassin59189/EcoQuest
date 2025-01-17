<?php
include "conn.php";
$nom=$_POST['name'];
$prenom=$_POST['lastName'];
$email=$_POST['email'];
$amount=$_POST['amount'];

$req = "INSERT INTO donation (nom, prenom, email, amount) VALUES ('$nom', '$prenom', '$email', '$amount')";
echo"bruh" ;
$res = mysqli_query($conn, $req);
if($res){
header("location:../contact.php");}
?>