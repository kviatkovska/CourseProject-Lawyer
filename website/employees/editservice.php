<?php
require_once "../dbconnect.php";

$s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$lawyer_id = mysqli_real_escape_string($conn, $_POST['lawyer_id']);

$sql = "UPDATE services SET price='$price', lawyer_id='$lawyer_id' WHERE s_name='$s_name'";

if (mysqli_query($conn, $sql)) {
  echo "Edit successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
