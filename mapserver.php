<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

include('database.php');

$query ="SELECT Firmware,Is_Connected,Is_Armed,Is_EKF_Ok, Mode, Latitude, Longitude, Altitude,
Heading, Lidar, GroundSpeed, Roll, Pitch, Yaw, Status, Is_Connected, Is_Armed, Is_EKF_Ok FROM Data ORDER BY TimeStamp DESC";
$check = $mysqli->query($query) or die($mysqli->error.__LINE__);
$row=$check->fetch_assoc();
$firmware = $row["Firmware"];
$is_connected = $row["Is_Connected"];
$is_armed = $row["Is_Armed"];
$is_ekf_ok = $row["Is_EKF_Ok"];
$mode = $row["Mode"];
$lat = $row["Latitude"];
$long = $row["Longitude"];
$alt = $row["Altitude"];
$heading = $row["Heading"];
$lidar = $row["Lidar"];
$groundSpeed = $row["GroundSpeed"];
$roll = $row["Roll"];
$pitch = $row["Pitch"];
$yaw = $row["Yaw"];
$status = $row["Status"];

echo "data:{$firmware},{$is_connected},{$is_armed},{$is_ekf_ok},{$mode},{$lat},{$long},{$alt},{$heading},{$lidar},{$groundSpeed},{$roll},{$pitch},{$yaw},{$status}\n\n";
flush();
?>
