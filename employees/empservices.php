<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Кабінет співробітника: Редагування послуг</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
 <?php require "../blocks/header.php" ?> 
<div class="emplbody">
<div class="inputtext"><h3>Додати послугу</h3><br>
<form action="addservice.php" method="post">
		Послуга: <input type="text" name="s_name" required><br>
		Ціна: <input type="text" name="price" required><br>
		Адвокат: <input type="text" name="lawyer_id" required><br>
		<input type="submit" value="Додати">
</form>
</div>
<div class="table"><h3>Список послуг</h3>
<?php require_once "../dbconnect.php";
$sql = "SELECT * FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th>№</th><th>Послуга</th><th>Ціна</th><th>Адвокат</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["s_id"]. "</td>
	            <td>" . $row["s_name"]. "</td> 
				<td>" . $row["price"]. "</td> 
				<td>" . $row["lawyer_id"]. "</td></tr>";
  }
} else {
  echo "0 results";}
  $conn->close();
?>
</div>
</div>
</body>
</html>