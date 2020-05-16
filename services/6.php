<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Земельні та житлові спори</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
  </head>
<body>
 <?php require "../blocks/header.php" ?> 
  <div id="col1">
   <img src="../img/l11.jpg"><br>
   Огородник Максим<br>
   Дві вищих освіти. Досвід роботи в різних компаніях. 
  </div>
  <div id="col2">
 <?php require_once "../dbconnect.php";
  $sql = "SELECT s_name, price FROM services WHERE s_id = '6'";
  $result = $conn->query($sql);
   if ($result->num_rows > 0) {
	echo "<b>Послуга:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<b><p>" . $row["s_name"]. ", " . $row["price"]. "</b></p>";  }
} else {  echo "0 results";}
 ?>
 Наші юристи з земельних справ та нерухомості надають професійну юридичну допомогу, а саме:<br>
• оформлення угод, пов’язаних із землею;<br>
• представництво в судах та в різних державних органах та інстанціях;<br>
• розділ землі;<br>
• визначення порядку користування землею;<br>
 <?php
  $sql = "SELECT * FROM lawyers WHERE l_id = '11' OR l_id = '12'";
  $result = $conn->query($sql);
   if ($result->num_rows > 0) {
	echo "<b>Адвокати у цій сфері:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<b><p>" . $row["l_name"]. ". Стаж роботи -  " . $row["experience"]. "</b></p>";  }
} else {  echo "0 results";}
  $conn->close();
 ?>
  </div>
  <div id="col3"> 
   <img src="../img/l12.jpg"><br>
   Мельничук Єлизавета<br>
   Вища юридична освіта в ЛНУ. Власниця бізнес-школи. Учасник Ради адвокатів Рівненської області 
  </div>
</body>
</html>