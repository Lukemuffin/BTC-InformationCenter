<?php

include("db.php");

$sql = "SELECT PerformerID, PerformerName, BandMembers FROM Performers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p><div data-tooltip='{$row['BandMembers']}' class='band {$row['PerformerID']}'>{$row['PerformerName']}</div></p>";
  }
}
$conn->close();
?>
