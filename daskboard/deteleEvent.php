<?php
include "conn.php";
$eventID = $_GET['eventID'];
$req = "delete from evenements where IDevent = $eventID";
$res = mysqli_query($conn, $req);
if($res) {
    header("location: events.php");
}
?>