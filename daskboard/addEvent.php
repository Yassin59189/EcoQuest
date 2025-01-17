<?php

include "conn.php";
$eventName=$_POST['eventName'];
$eventDate=$_POST['eventDate'];
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$eventDescription=$_POST['eventDescription'];
$eventPlace=$_POST['eventPlace'];
$cords=$_POST['cords'];




if(isset($_POST['eventType'])) {
    $eventType=$_POST['eventType'];
}

$req = "insert into evenements(Nom, Description, Location, Date, startTime, endTime, eventType, Status,Googlemaps) 
values('$eventName', '$eventDescription', '$eventPlace', '$eventDate', '$startTime', '$endTime', '$eventType', 'upcomming', '$cords')";

$res = mysqli_query($conn, $req);
if($res) {
    header ("location : index.php");
}

?>