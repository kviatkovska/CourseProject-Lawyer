<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Кабінет співробітника: Редагування адвокатів</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
 <?php require "../blocks/header.php" ?>
<div class="emplbody">
<div class="inputtext"><h3>Додати адвоката</h3><br>
<form action="addlawyer.php" method="post">	
		ПІБ: <input type="text" name="l_name" required><br>
		Стаж роботи: <input type="text" name="experience" required><br>
		Кваліфікація: <input type="text" name="qualification" required><br>
		<input type="submit" value="Додати">
</form>
</div> 
<div class="table"><h3>Список адвокатів</h3>
<?php require_once "../dbconnect.php";
$sql = "SELECT * FROM lawyers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th>№</th><th>Адвокат</th><th>Стаж роботи</th><th>Кваліфікація</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["l_id"]. "</td>
	            <td>" . $row["l_name"]. "</td> 
				<td>" . $row["experience"]. "</td> 
				<td>" . $row["qualification"]. "</td></tr>";
  }
} else {
  echo "0 results";}
  $conn->close();
?>
</div>
</div>
</body>
</html>