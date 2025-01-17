<?php
include "conn.php";
$userid=$_GET['userid'];
$req="delete from utilisateur where ID='$userid'";
$res=mysqli_query($conn, $req);
if($res){
    header("location: index.php");
}
?>