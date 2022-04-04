<?php
include "dbconn.php";

$sql = "update Students set firstname = ?, lastname = ?, email = ? where id = ?";
$id =  $_REQUEST["id"];
$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssi", $fname,$lname,$email,$id);
       
if ($stmt->execute() === TRUE) {
  echo "<script>window.location.href = 'students.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>