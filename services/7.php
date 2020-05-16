<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Банківські спори</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
  </head>
<body>
 <?php require "../blocks/header.php" ?> 
  <div id="col1">
   <img src="../img/l13.jpg"><br>
   Луцюк Микола<br>
   Вища економічна та юридична освіта. Досвід роботи юристом у державному банку.
  </div>
  <div id="col2">
 <?php require_once "../dbconnect.php";
  $sql = "SELECT s_name, price FROM services WHERE s_id = '7'";
  $result = $conn->query($sql);
   if ($result->num_rows > 0) {
	echo "<b>Послуга:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<p><b>" . $row["s_name"]. ", " . $row["price"]. "</b></p>";  }
} else {  echo "0 results";}
  $sql = "SELECT * FROM lawyers WHERE l_id = '13'";
  $result = $conn->query($sql);
 ?>
   Ми надаємо такі юридичні послуги, стосовно банківських справ:<br>
   • аналіз договорів іпотеки;<br>
   • робота з документами по припиненні іпотеки, арешту чи заборони;<br>
   • представництво в судах будь-яких інстанцій, органах реєстрації;<br>
   • зміна умов контрактів в процесі банківських переговорів;<br>
 <?php
   if ($result->num_rows > 0) {
	echo "<b>Адвокати у цій сфері:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<p><b>" . $row["l_name"]. ". Стаж роботи -  " . $row["experience"]. "</b></p>";  }
} else {  echo "0 results";}
  $conn->close();
 ?>
  </div>
</body>
</html>