<?php
include "dbconn.php";

$sql = "insert into Students (firstname,lastname,email) VALUES (?,?,?)"; 

$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $fname,$lname,$email);
if ($stmt->execute() === TRUE) {
  echo "<script>window.location.href = 'students.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>