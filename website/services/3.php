<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Судовий спір</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
  </head>
<body>
 <?php require "../blocks/header.php" ?> 
  <div id="col1">
  <img src="../img/l5.jpg"><br>
   Ромашко Людмила<br>
   Досвід роботи керівником юридичного відділу. Фахівець із захисту прав.
  </div>
  <div id="col2">
 <?php require_once "../dbconnect.php";
  $sql = "SELECT s_name, price FROM services WHERE s_id = '3'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	echo "<b>Послуга:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<p><b>" . $row["s_name"]. ", " . $row["price"]. "</b></p>";  }
} else {  echo "0 results";}
 ?>
 Представництво в судах та в різних державних органах та інстанціях<br>
 <?php
  $sql = "SELECT * FROM lawyers WHERE l_id = '5' OR l_id = '6'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	echo "<b>Адвокати у цій сфері:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<p><b>" . $row["l_name"]. ". Стаж роботи -  " . $row["experience"]. "</b></p>"; }
} else {  echo "0 results";}
  $conn->close();
 ?>
  </div>
  <div id="col3"> 
   <img src="../img/l6.jpg"><br>
    Питель Володимир<br>
    Надає правову допомогу в господарських, цивільних та кримінальних справах. 
  </div>
</body>
</html>
