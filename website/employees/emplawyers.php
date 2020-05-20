<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Кабінет співробітника: Редагування списку адвокатів</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
    <style type="text/css"> 
    #col1, #col2, #col3 {
     width: 434px; 
     padding: 0 7px;
     float: left;
	 color: maroon;
     background-color: rgba(250, 238, 221, 0.6); 
    } 
    #col1, #col2 {
     border-right: 1px solid #000;
    }
  </style>
</head>
<body>
<div class="emplbody"> <?php require "../blocks/header.php" ?> 
 <?php require "../login.php" ;
 if (! empty($_SESSION['success'])) {
    ?>
<div id="col1"><h3>Додати адвоката</h3><br>
<form action="addlawyer.php" method="post">
		Прізвище та ім'я адвоката: <input type="text" name="l_name" required><br>
		Стаж роботи: <input type="text" name="experience" required><br>
		Кваліфікація: <input type="text" name="qualification" required><br>
		<input type="submit" value="Додати">
</form>
</div>
<div id="col2"><h3>Редагувати дані адвоката</h3><br>
<form action="editlawyer.php" method="post">
		Прізвище та ім'я адвоката: <input type="text" name="l_name" required><br>
		Стаж роботи: <input type="text" name="experience" required><br>
		Кваліфікація: <input type="text" name="qualification" required><br>
		<input type="submit" value="Редагувати">
</form>
</div>
<div id="col3"><h3>Видалити дані адвоката</h3><br>
 <form action="deletelawyer.php" method="post">
       Прізвище та ім'я адвоката: <input type="text" name="l_name" required><br>
	   Стаж роботи: <input type="text" name="experience" required><br>
	   Кваліфікація: <input type="text" name="qualification" required><br>
	   <input type="submit" value="Видалити">
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
<?php
}
else
{
?>
<div class="inputtext"><h3>Вхід у систему для адвоката:</h3><br>
<?php
	
	echo 'Ви не увійшли в кабінет. <a href="reg.php">Увійти.</a>';
}
?>
</div>
</div>
</body>
</html>
