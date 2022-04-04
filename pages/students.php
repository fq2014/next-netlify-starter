<?php
include "dbconn.php";
echo "<table border=1><tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
$sql = "SELECT * FROM Students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc())
     echo "<tr><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["Email"] .
      "</td><td><a href='delstudent.php?id=" . $row["id"] . "'>Del</a></td>" .
      "</td><td><a href='editstudent.php?id=" . $row["id"] . "'>Edit</a></td></tr>";
}  
echo "</table>";
$conn->close();
?>
<a href="addstudent.htm">Add New</a>
