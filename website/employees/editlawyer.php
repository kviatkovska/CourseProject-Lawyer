<?php
require_once "../dbconnect.php";

$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$experience = mysqli_real_escape_string($conn, $_POST['experience']);
$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);

$sql = "UPDATE lawyers SET experience='$experience', qualification='$qualification' WHERE l_name='$l_name'";

if (mysqli_query($conn, $sql)) {
  echo "Edit successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
