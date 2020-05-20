<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Кабінет співробітника</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
<div class="emplbody">
 <?php require "blocks/header.php" ?> 
 <?php require "login.php" ;
 if (! empty($_SESSION['success'])) {
    ?>
<div class="empmenu">
  <a href="index.php" target="_blank"><h3>Головна</h3></a>
  <a href="../employees/empservices.php" target="_blank">Перегляд і редагування послуг</a>
  <a href="../employees/emplawyers.php" target="_blank">Список адвокатів</a>
  <a href="../employees/empreg.php" target="_blank">Додати працівника</a>
  <a href="logout.php">Вийти</a>
</div>
</div>
<?php
}
else
{
?>
<div class="inputtext"><h3>Вхід у систему для адвоката:</h3><br>
<form action="login.php" method="post">		
		<input type="text" name="login" value="" placeholder="Ваш логін*" required><br>
		<input type="password" name="password" value="" placeholder="Ваш пароль*" required><br>
		<input type="submit" value="Увійти">
</form>
</div>
<?php
	}
?>
</body>
</html>
