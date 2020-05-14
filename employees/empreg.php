<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Кабінет співробітника: Додати співробітника</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>
<body>
 <?php require "../blocks/header.php" ?> 
<div class="inputtext"><h3>Форма реєстрації нового працівника</h3><br>
<form action="addemployee.php" method="post">
		ПІБ: <input type="text" name="e_name" required><br>
		Email: <input type="text" name="email" required><br>
		Логін: <input type="text" name="login" required><br>
		Пароль: <input type="text" name="password" required><br>
		<input type="submit" value="Зареєструвати">
</form>
</div>
</body>
</html>