<?php
include('database.php');

$firmware = $GET["firm"];
$connected = $GET["conn"];
$armed = $GET["arm"];
$ekf_ok = $GET["ekf"];
$mode = $GET["mode"];
$lat = $GET["lat"];
$long = $GET["long"];
$alt = $GET["alt"];
$heading = $GET["head"];
$lidar = $GET["lidar"];
$groundSpeed = $GET["gs"];
$roll = $GET["roll"];
$pitch = $GET["pitch"];
$yaw = $GET["yaw"];
// $firm = 'Hello';
// echo "Yo".$firmware." ".$connected." ".$armed." ".$ekf_ok." ".$mode." ".$lat." ".
// $long." ".$alt;
echo "<html><head><p>firmware:".$firmware."</p></head></html>";
// $query = "INSERT INTO Data(Firmware) VALUES('$firm')";
$query = "INSERT INTO Data (Firmware,Is_Connected,Is_Armed,Is_EKF_Ok, Mode, Latitude, Longitude, Altitude, Heading, Lidar, GroundSpeed, Roll, Pitch, Yaw)VALUES('$firmware','$connected','$armed','$ekf_ok','$mode','$lat','$long','$alt','$heading','$lidar','$groundSpeed','$roll','$pitch','$yaw')";
// $query = "INSERT INTO Data (Firmware,Is_Connected,Is_Armed,Is_EKF_Ok, Mode, Latitude, Longitude, Altitude, Heading, Lidar, GroundSpeed, Roll, Pitch, Yaw)VALUES($firmware,$connected,$armed,$ekf_ok,$mode,$lat,$long,$alt,$heading,$lidar,$groundSpeed,$roll,$pitch,$yaw)";

$check = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
