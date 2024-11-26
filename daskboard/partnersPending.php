<?php
include "conn.php";
$IDpartenaire = $_GET['IDpartenaire'];
$req = "UPDATE partenaires set statue='P' where IDpartenaire = '$IDpartenaire'";
$res = mysqli_query($conn, $req);
if($res){
    header("location: partners.php");
}
?>