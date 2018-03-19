<?php
include('database.php');

$firm = $_GET["firm"];
$mode = $_GET["mode"];
$long=$_GET["long"];
$lat=$_GET["lat"];
$alt = $_GET["alt"];
$head = $_GET["head"];
$lidar = $_GET["lidar"];
$gs = $_GET["gs"];
$roll = $_GET["roll"];
$pitch = $_GET['pitch'];
$yaw = $_GET["yaw"];
$status = $_GET["status"];
$conn = $_GET["conn"];
$ekf = $_GET["ekf"];
$arm = $_GET["arm"];
echo $ekf."--".$_GET["firm"];

$query = "INSERT INTO Data(Firmware,Is_Connected, Is_Armed, Is_EKF_Ok,Mode,Longitude,Latitude,Altitude,Heading,LiDar,GroundSpeed,Roll, Pitch, Yaw,Status)
 VALUES('$firm','$conn','$arm','$ekf','$mode','$long','$lat','$alt','$head','$lidar','$gs','$roll','$pitch','$yaw','$status')";
$check = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
