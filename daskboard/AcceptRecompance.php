<?php
include "conn.php";
$idReqReco = $_GET['idReqReco'];
$title=$_GET['title'];
$partnerID = intval($_GET['partnerID']); 
$quantity = intval($_GET['quantity']);
$description=$_GET['description'];
$partnerName=$_GET['partnerName'];
$picture=$_GET['picture'];

echo $description,$partnerName;
$req = "UPDATE requestrecompance SET status = 'accepted' WHERE idReqReco = '$idReqReco'";
$res = mysqli_query($conn, $req);
$req2 = "INSERT INTO recompance (reco_title, reco_partnerID, reco_quantity, reco_Discription, partenaireName, recoPicture)
VALUES (
    '" . mysqli_real_escape_string($conn, $title) . "',
    " . intval($partnerID) . ",
    " . intval($quantity) . ",
    '" . mysqli_real_escape_string($conn, $description) . "',
    '" . mysqli_real_escape_string($conn, $partnerName) . "',
    '" . mysqli_real_escape_string($conn, $picture) . "'
)";

$res2 = mysqli_query($conn, $req2);

if($res && $res2){
     header("location: tabs.php"); 
}
else {
    echo "Error: " . $req . "<br>" . mysqli_error($conn);
    echo "efff<br>";
    echo "Error: " . $req2 . "<br>" . mysqli_error($conn);
}
?>