<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Інтелектуальна власність</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
 <?php require "../blocks/header.php" ?> 
  <div id="col1">
   <img src="../img/l14.jpg"><br>
   Іващенко Ірина<br>
   Вища юридична освіта. Фахівець у справах із захисту інтелектуальної власності 
  </div>
  <div id="col2">
 <?php require_once "../dbconnect.php";
 $sql = "SELECT s_name, price FROM services WHERE s_id = '8'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
   echo "<b>Послуга:</b>";
    while($row = $result->fetch_assoc()) {
	  echo "<p><b>" . $row["s_name"]. ", " . $row["price"]. "</b></p>"; }
} else { echo "0 results";}
 ?> 
  Оформлення/реєстрація прав на ітелектуальну власність<br> 
 <?php 
 $sql = "SELECT * FROM lawyers WHERE l_id = '14'";
 $result = $conn->query($sql);
   if ($result->num_rows > 0) {
	echo "<b>Адвокати у цій сфері:</b>";
      while($row = $result->fetch_assoc()) {
	    echo "<p><b>" . $row["l_name"]. ". Стаж роботи -  " . $row["experience"]. "</b></p>"; }
} else { echo "0 results";}
  $conn->close();
 ?>
  </div>
</body>
</html>