<?php
$servername = "playcurvefever.com";
$username = "gageampcf";
$password = "Bigbadgerfan1@";
$dbname = "DbFestival";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
