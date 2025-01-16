<?php
include "conn.php";
$IDsponsor = $_GET['idsponsor'];
$req = "delete from sponsors where idsponsor='$IDsponsor'";
$res = mysqli_query($conn, $req);
if($res){
    header("location: tabs.php");
}
?>