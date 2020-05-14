<?php
require_once "../dbconnect.php";

$e_name = mysqli_real_escape_string($conn, $_POST['e_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$login = mysqli_real_escape_string($conn, $_POST['login']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "INSERT INTO employees (e_name, email, login, password) VALUES ('$e_name', '$email', '$login', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>