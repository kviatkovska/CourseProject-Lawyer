<?php
require_once "../dbconnect.php";

$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$experience = mysqli_real_escape_string($conn, $_POST['experience']);
$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);

$sql = "DELETE FROM lawyers WHERE l_name='$l_name'";

if (mysqli_query($conn, $sql)) {
  echo "Delete successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>