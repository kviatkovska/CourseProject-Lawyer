<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>ДТП</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
  </head>
<body>
 <?php require "../blocks/header.php" ?> 
  <div id="col1">
   <img src="../img/l9.jpg"><br>
   Орловська Ярослава<br>
   Фахівець у справах ДТП
  </div>
  <div id="col2">
 <?php require_once "../dbconnect.php"; 
  $sql = "SELECT s_name, price FROM services WHERE s_id = '5'";
  $result = $conn->query($sql);
   if ($result->num_rows > 0) {
	echo "<b>Послуга:</b>";
     while($row = $result->fetch_assoc()) {
      echo "<p><b>" . $row["s_name"]. ", " . $row["price"]. "</b></p>";  }
} else {  echo "0 results";}
 ?>
   Наші адвокати по ДТП нададуть професійну юридичну допомогу, а саме:<br>
   •Ознайомлення з матеріалами справи в ДАІ/суді.<br>
   •Підготовка та збір необхідних документів для подачі в страхову компанію.<br>
   •Написання позовної заяви/апеляційної скарги.<br>
   •Участь у справі при захисті інтересів в судах.<br>
   •Скарга в МТСБУ/нацкомісію.<br>  
 <?php   
  $sql = "SELECT * FROM lawyers WHERE l_id = '9' OR l_id = '10'";
  $result = $conn->query($sql);
   if ($result->num_rows > 0) {
	echo "<b>Адвокати у цій сфері:</b>";
      while($row = $result->fetch_assoc()) {
	   echo "<p><b>" . $row["l_name"]. ". Стаж роботи -  " . $row["experience"]. "</b></p>";  }
} else {  echo "0 results";}
  $conn->close();
 ?>
  </div>
  <div id="col3"> 
   <img src="../img/l10.png"><br>
   Оніщук Валерій<br>
   Адвокат по ДТП. Власник страхової компанії.
  </div>
</body>
</html>
