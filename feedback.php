<!DOCTYPE html>
<html>
 <?php require_once "Z:\home\site\www\blocks\head.php" ?> 
<body>
 <?php require_once "Z:\home\site\www\blocks\header.php" ?> 
  
 <?php require_once "Z:\home\site\www\blocks\menu.php" ?>
 
<div class="feedback"><b><i>Заповніть форму, щоб ми зв'язалися з Вами:</b></i><br>
		<input type="text" name="email" value="" placeholder="Ваш email*"  data-err="Заповніть email" size="40"><br>
		<input type="text" name="name" value="" placeholder="Ваше ім'я*"  data-err="Заповніть ім'я" size="40"><br>
		<input type="text" name="tel" value="" placeholder="Ваш телефон*" data-err="Заповніть телефон" size="40"><br>
		<textarea name="mess" cols="40" rows="10" placeholder="Опишіть Вашу проблему"></textarea>
		<div class="ajax-loader"></div>
		<div id="f1-r2"></div>
		<button class="button">Відправити</button>
</div>
</body>
</html>