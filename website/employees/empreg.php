<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Кабінет співробітника: Додати співробітника</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
<style type="text/css"> 
    #col1, #col2, #col3 {
     width: 434px; 
     padding: 0 7px;
     float: left;
	 color: maroon;
     background-color: rgba(250, 238, 221, 0.6); 
    } 
    #col1, #col2 {
     border-right: 1px solid #000;
    }
  </style>
</head>
<body>
<div class="emplbody"> <?php require "../blocks/header.php" ?>  
<?php require "../login.php" ;
 if (! empty($_SESSION['success'])) {
    ?>
<div class="inputtext"><h3>Форма реєстрації нового працівника</h3><br>
<form action="addemployee.php" method="post">
		Прізвище та ім'я: <input type="text" name="e_name" required><br>
		Email: <input type="text" name="email" required><br>
		Логін: <input type="text" name="login" required><br>
		Пароль: <input type="password" name="password" required><br>
		<input type="submit" value="Зареєструвати">
</form>
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
</div>
</body>
</html>
