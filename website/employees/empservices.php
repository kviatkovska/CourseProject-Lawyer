<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Кабінет співробітника: Редагування послуг</title>
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
<div id="col1"><h3>Додати послугу</h3><br>
<form action="addservice.php" method="post">
		Послуга: <input type="text" name="s_name" required><br>
		Ціна: <input type="text" name="price" required><br>
		Адвокат: <input type="text" name="lawyer_id" required><br>
		<input type="submit" value="Додати">
</form>
</div>
<div id="col2"><h3>Редагувати послугу</h3><br>
<form action="editservice.php" method="post">
		Послуга: <input type="text" name="s_name" required><br>
		Ціна: <input type="text" name="price" required><br>
		Адвокат: <input type="text" name="lawyer_id" required><br>
		<input type="submit" value="Редагувати">
</form>
</div>
<div id="col3"><h3>Видалити послугу</h3><br>
 <form action="deleteservice.php" method="post">
        Послуга: <input type="text" name="s_name" required><br>
		Ціна: <input type="text" name="price" required><br>
		Адвокат: <input type="text" name="lawyer_id" required><br>
	   <input type="submit" value="Видалити">
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
				<td>" . $row["lawyer_id"]. "</td>
				</tr>";
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
