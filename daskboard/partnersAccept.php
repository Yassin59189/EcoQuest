<?php
include "conn.php";
$IDpartenaire = $_GET['IDpartenaire'];
$req = "update partenaires set statue='A' where IDpartenaire = '$IDpartenaire'";
$res = mysqli_query($conn, $req);
if($res){
    header("location: partners.php");
}
?>