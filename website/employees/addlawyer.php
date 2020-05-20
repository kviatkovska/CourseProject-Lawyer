<?php
require_once "../dbconnect.php";

$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$experience = mysqli_real_escape_string($conn, $_POST['experience']);
$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);

$sql = "INSERT INTO lawyers (l_name, experience, qualification) VALUES ('$l_name', '$experience', '$qualification')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
