<?php
include "dbconn.php";
$sql = "delete from Students where id=?";
$id = $_REQUEST["id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute() === TRUE) {
  echo "<script>window.location.href = 'students.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>