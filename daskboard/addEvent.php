<?php

include "conn.php";
$eventName=$_POST['eventName'];
$eventDate=$_POST['eventDate'];
$startTime=$_POST['startTime'];
$endTime=$_POST['endTime'];
$eventDescription=$_POST['eventDescription'];
$eventPlace=$_POST['eventPlace'];

if(isset($_POST['eventType'])) {
    $eventType=$_POST['eventType'];
}

$req = "insert into evenements('Nom', 'Description', 'Location', 'Date', 'startTime', 'endTime', 'eventType', 'Status') 
values('$eventName', '$eventDescription', '$eventPlace', '$eventDate', '$startTime', '$endTime', '$eventType', 'upcomming')";

$res = mysqli_query($conn, $req);
echo("test");
if($res) {
    echo("test");
}
?>