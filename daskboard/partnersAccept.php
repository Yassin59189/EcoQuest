<?php
include "conn.php";
$IDpartenaire = $_GET['IDpartenaire'];
$req = "update partenaires set statue= TRUE where IDpartenaire = '$IDpartenaire'";
$res = mysqli_query($conn, $req);
if($res){
    header("location: partners.php");
}
?>