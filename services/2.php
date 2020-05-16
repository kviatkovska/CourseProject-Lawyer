<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Дозвільна діяльність</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
 <?php require "../blocks/header.php" ?> 
  <div id="col1">
  <img src="../img/l3.jpg" ><br>
   Філіпова Надія<br>
   Фахівець дозвільної та реєстраційної справи. Вища юридична освіта. Досвід роботи у декількох компаніях.
  </div>
  <div id="col2">
 <?php require_once "../dbconnect.php";
  $sql = "SELECT s_name, price FROM services WHERE s_id = '2'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	echo "<b>Послуга:</b>";
     while($row = $result->fetch_assoc()) {
	  echo "<p><b>" . $row["s_name"]. ", " . $row["price"]. "</b></p>";}
} else {  echo "0 results";}
 ?> 
  <p>Реєстрація товариств (ТОВ), приватних підприємств (ПП), акціонерних товариств (АТ) в Рівному<br>
  <b>Державна реєстрація:</b><br>
  •ТОВ, ПП, АТ<br>
  •Підприємців<br>
  •Громадських організацій<br>
  •Благодійних організацій<br>
  •Кооперативів<br>
  •Підприємств<br>
  •Внесення змін до статуту та реєстру<br>
  Також наша компанія спеціалізуються на ліквідації підприємств і супроводі процедури банкрутства.</p> 
 <?php 
  $sql = "SELECT * FROM lawyers WHERE l_id = '3' OR l_id = '4'";
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
   <img src="../img/l4.jpg" ><br>
   Семенко Віктор<br>
   Учасник Ради адвокатів Рівненської області 
  </div>
</body>
</html>