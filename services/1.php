<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Консультування та розроблення договорів</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
 <?php require "../blocks/header.php" ?> 
  <div id="col1">
  <img src="../img/l1.jpg"><br>
   Шторгін Вікторія<br>
   Адвокат по договірним зобов'язанням. Фахівець з цивільного права. Учасник Ради адвокатів Рівненської області.
  </div>
  <div id="col2"
 <?php require_once "../dbconnect.php";
  $sql = "SELECT s_name, price FROM services WHERE s_id = '1'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	echo "<b>Послуга:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<p><b>" . $row["s_name"]. ", " . $row["price"]. "</b></p>";  }
} else {  echo "0 results";}
 ?>
 Надання послуг укладення, виконання та припинення договорів підряду, перевезення, <br>
 страхування, комісії, позики тощо, <br>
 а також правові наслідки порушення зобов’язань і відповідальність сторін за їх невиконання.<br>
 <?php
  $sql = "SELECT * FROM lawyers WHERE l_id = '1' OR l_id = '2'";
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
   <img src="../img/l2.jpg"><br>
   Чехомський Олег<br>
   Адвокат по договірним зобов'язанням. Фахівець з цивільного та адміністративного права.
  </div>
</body>
</html>