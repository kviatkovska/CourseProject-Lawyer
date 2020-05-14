<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Зворотній зв'язок</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
 <?php require "blocks/header.php" ?> 
 <?php require "blocks/menu.php" ?>
<div class="inputtext"><h3>Заповніть форму, щоб ми зв'язалися з Вами:</h3><br>
<form action="send.php" method="post">
		<input type="text" name="name" placeholder="Ваше ім'я*" required><br>
		<input type="email" name="email" placeholder="Ваш email*" required><br>
		<textarea name="message" rows="5" cols="45" placeholder="Опишіть Вашу проблему"></textarea>
		<input type="submit" value="Відправити">
</form>
</div>
 <?php require "blocks/footer.php" ?>
</body>
</html>