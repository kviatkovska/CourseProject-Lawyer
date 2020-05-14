<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Кабінет співробітника</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
 <?php require "blocks/header.php" ?> 
 <?php require "login.php" ;
 if (! empty($_SESSION['success'])) {
    ?>
<div class="empmenu">
  <a href="index.php"><h3>Головна</h3></a>
  <a href="../employees/empservices.php">Перегляд і редагування послуг</a>
  <a href="../employees/emplawyers.php">Список адвокатів</a>
  <a href="../employees/empreg.php">Додати працівника</a>
  <a href="logout.php">Вийти</a>
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
</body>
</html>