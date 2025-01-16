<?php
include "conn.php";
$idmat=$_GET['idmat'];
$req="delete from materials where idmat='$idmat'";
$res=mysqli_query($conn, $req);
if($res){
    header("location: tabs.php");
}
?>