<?php
include "conn.php";
$IDevent = $_GET['eventID'];
$eventName=$_POST['eventName'];
$eventDate=$_POST['eventDate'];
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$eventDescription=$_POST['eventDescription'];
$eventPlace=$_POST['eventPlace'];
$eventImage = $_FILES['eventImage']['name'];
if(isset($_POST['eventStatue'])) {
    $eventStatue=$_POST['eventStatue'];
}

if(isset($_POST['eventType'])) {
    $eventType=$_POST['eventType'];
}

$qty=$_POST['quantities'];
$idmat=$_POST['idmat'];
$tmp_name = $_FILES['eventImage']['tmp_name'];

// Generate a unique file name using time and original file extension
$timestamp = time();
$extension = pathinfo($eventImage, PATHINFO_EXTENSION); // Get file extension
$newFileName = $timestamp . '.' . $extension;

// Specify the upload location
$location = "../uploads/" . $newFileName;

if (move_uploaded_file($tmp_name, $location)) {
  echo("done");
} else {
    echo "File not uploaded";
}

$req = "update evenements set Nom='$eventName', Description='$eventDescription', Location='$eventPlace', Date='$eventDate', startTime='$startTime' ,eventImage='$newFileName', endTime='$endTime', eventType='$eventType', Status='$eventStatue' WHERE IDevent = $IDevent";
$res = mysqli_query($conn, $req);
if($res){
    header("location: events.php");
    echo($eventStatue);
}
else{
    echo "Error: " . $req . "<br>" . $conn->error;
}
    foreach($qty as $idmat => $quantity){
        $nomMatReq="select nommat from materials where idmat ='$idmat'";
        $nomMatRes=mysqli_query($conn, $nomMatReq);
        if($nomMatRow=mysqli_fetch_assoc($nomMatRes)){
            $nommat=$nomMatRow['nommat'];
        }
        $req2="update materials set qty = qty+'$quantity' where idmat='$idmat'";
        if(!empty($quantity)){
            $res2=mysqli_query($conn, $req2);
            $req2="update materials set qty = qty+'$quantity' where idmat='$idmat'";
            $req3="insert into eventmaterials (idmat, idevent, nommat, qty) values('$idmat', '$IDevent', '$nommat', '$quantity')";
            $res3=mysqli_query($conn, $req3);
        }
        
        
    }
    header("location: events.php");
    


?>