<!DOCTYPE html>
<html>
 <?php require_once "Z:\home\site\www\blocks\head.php" ?> 
<body>
 <?php require_once "Z:\home\site\www\blocks\header.php" ?> 
  
 <?php require_once "Z:\home\site\www\blocks\menu.php" ?>
 
<div class="feedback"><b>Заповніть форму, щоб ми зв'язалися з Вами:</b><br>
		<input type="text" name="email" value="" placeholder="Ваш email*"  data-err="Заповніть email" size="50"><br>
		<input type="text" name="name" value="" placeholder="Ваше ім'я*"  data-err="Заповніть ім'я" size="50"><br>
		<input type="text" name="tel" value="" placeholder="Ваш телефон*" data-err="Заповніть телефон" size="50"><br>
		<textarea name="mess" cols="50" rows="7" placeholder="Опишіть Вашу проблему"></textarea>
		<div class="ajax-loader"></div>
		<div id="f1-r2"></div>
		<button class="button">Відправити</button>
</div>

<footer>
   <div class="text2" align="center">
<b>Контактна інформація</b> <br>
<i><b>Телефон: 0987654321   |   Адресa: вул. Міцкевича, 1   |   Email: advokatrivne@example   |   Графік роботи: Щодня 10:00-18:00</i></b><br> 
</div>
 </footer>
 
</body>
</html>
