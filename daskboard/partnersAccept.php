<?php
include "conn.php";
$IDpartenaire = $_GET['IDpartenaire'];
$req = "update partenaires set statue='A' where IDpartenaire = '$IDpartenaire'";
$res = mysqli_query($conn, $req);
$req1="select ID from utilisateur u , partenaires p where p.iduser=u.ID and p.IDpartenaire='$IDpartenaire'";
$res1=mysqli_query($conn, $req1);
if($row=mysqli_fetch_assoc($res1)){
    $userid=$row['ID'];
}
$req2="update utilisateur set role='partner' where ID='$userid'";
$res2=mysqli_query($conn, $req2);
if($res){
    header("location: partners.php");
}
?>