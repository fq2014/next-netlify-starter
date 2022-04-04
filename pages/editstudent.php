<?php
include "dbconn.php";

$sql = "SELECT * FROM Students where id = ? ";
$id = $_REQUEST["id"];
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
}  

?>
<form action="upstudent.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo $row["FirstName"]?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"  value="<?php echo $row["LastName"]?>"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"  value="<?php echo $row["Email"]?>"><br>
  <input type="hidden" id="id" name="id"  value="<?php echo $_REQUEST["id"]?>"><br>
  <input type="submit" value="Submit">
</form>
<?php
$conn->close();
?>
