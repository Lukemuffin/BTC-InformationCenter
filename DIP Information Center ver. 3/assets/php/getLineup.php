<?php

include("db.php");

$sql = "SELECT PerformerID, PerformerName, BandMembers, PerformerArtwork FROM Performers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='perform-time' style='background-color: {$row['PerformerArtwork']};text-shadow: 0px 0px 10px #000000;'>#time-here</div><p><div data-tooltip='{$row['BandMembers']}' class='lineup {$row['PerformerID']}' style='background-color: {$row['PerformerArtwork']};text-shadow: 0px 0px 10px #000000;'>{$row['PerformerName']}</div></p>";
  }
}
$conn->close();
?>
