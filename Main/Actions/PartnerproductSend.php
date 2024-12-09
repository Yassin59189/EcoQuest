<?php
include "conn.php";
session_start();
$idPartner=$_SESSION['id'];
$title = $_POST['productTitle'];
$quantity = $_POST['productQuantity'];
$description = $_POST['productDescription'];
$picture = $_FILES['productPicture']['name'];	
$tmp_name = $_FILES['productPicture']['tmp_name'];

// Generate a unique file name using time and original file extension
$timestamp = time();
$extension = pathinfo($picture, PATHINFO_EXTENSION); // Get file extension
$newFileName = $timestamp . '.' . $extension;

// Specify the upload location
$location = "../../uploads/" . $newFileName;

if (move_uploaded_file($tmp_name, $location)) {
  
} else {
    echo "File not uploaded";
}

$req = "INSERT INTO requestrecompance (IDpartner, title, quantity, description, picture) VALUES ('$idPartner', '$title', '$quantity', '$description', '$newFileName')";
$res = mysqli_query($conn, $req);
if($res){
header("location:../PartnerContrbuite.php");} 
?>