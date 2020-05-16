<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Сімейні справи</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
  </head>
<body>
 <?php require "../blocks/header.php" ?> 
  <div id="col1">
   <img src="../img/l7.jpg"><br>
   Пашкевич Ірина<br>
   Фахівець з сімейного права.
  </div>
  <div id="col2">
 <?php require_once "../dbconnect.php";
  $sql = "SELECT s_name, price FROM services WHERE s_id = '4'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	echo "<b>Послуга:</b>";
     while($row = $result->fetch_assoc()) {
      echo "<p><b>" . $row["s_name"]. ", " . $row["price"]. "</b></p>";  }
} else {  echo "0 results";}
 ?>
   Напрямами діяльності адвоката з сімейних справ:<br>
   • надання консультацій з питань укладання та припинення шлюбу, аліментів, розподілу майна, батьківства;<br>
   • допомога сімейного адвоката щодо усиновлення, визнання батьківства;<br>
   • ведення справ у судах стосовно виїзду дитини за кордон;<br>
   • вирішення питань щодо аліментів;<br>
   • розробка шлюбних контрактів та інших угод між подружжям;<br>
   • представлення інтересів членів сім’ї в судових інстанціях.<br> 
 <?php
  $sql = "SELECT * FROM lawyers WHERE l_id = '7' OR l_id = '8'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	echo "<b>Aдвокати у цій сфері:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<p><b>" . $row["l_name"]. ". Стаж роботи -  " . $row["experience"]. "</b></p>";  }
} else {  echo "0 results";}
  $conn->close();
 ?>
  </div>
  <div id="col3"> 
   <img src="../img/l8.jpg"><br>
   Пасічник Катерина<br>
   Фахівець з сімейного права. Учасник Ради адвокатів Рівненської області 
  </div>
</body>
</html>