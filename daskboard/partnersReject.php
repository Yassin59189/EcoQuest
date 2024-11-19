<?php
include "conn.php";
$IDpartenaire = $_GET['IDpartenaire'];
$req = "DELETE FROM partenaires where IDpartenaire = '$IDpartenaire'";
$res = mysqli_query($conn, $req);
if($res){
    header("location: partners.php");
}
?>