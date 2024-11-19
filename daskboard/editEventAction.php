<?php
include "conn.php";
$IDevent = $_GET['eventID'];
$eventName=$_POST['eventName'];
$eventDate=$_POST['eventDate'];
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$eventDescription=$_POST['eventDescription'];
$eventPlace=$_POST['eventPlace'];
$req = "update evenements set Nom='$eventName', Description='$eventDescription', Location='$eventPlace', Date='$eventDate', startTime='$startTime', endTime='$endTime' where IDevent = '$IDevent'";
$res = mysqli_query($conn, $req);
if($res){
    header("location: events.php");
}
?>