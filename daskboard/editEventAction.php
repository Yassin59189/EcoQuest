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
$tmp_name = $_FILES['eventImage']['tmp_name'];

// Generate a unique file name using time and original file extension
$timestamp = time();
$extension = pathinfo($eventImage, PATHINFO_EXTENSION); // Get file extension
$newFileName = $timestamp . '.' . $extension;

// Specify the upload location
$location = "../uploads/" . $newFileName;

if (move_uploaded_file($tmp_name, $location)) {
  
} else {
    echo "File not uploaded";
}
$req = "update evenements set Nom='$eventName', Description='$eventDescription', Location='$eventPlace', Date='$eventDate', startTime='$startTime' ,eventImage='$newFileName', endTime='$endTime' WHERE IDevent = $IDevent";
$res = mysqli_query($conn, $req);
if($res){
    header("location: events.php");
}
else{
    echo "Error: " . $req . "<br>" . $conn->error;
}
?>