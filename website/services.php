<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Наші послуги</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
 <?php require "blocks/header.php" ?> 
 <?php require "blocks/menu.php" ?>
<div class="services"><h3>Оберіть потрібну сферу:</h3><br>
<a href="services\1.php"title="Консультування та розроблення договорів" target="_blank"</a>
<img src="img\1.png">Консультування та розроблення договорів<br>

<a href="services\2.php"title="Дозвільна діяльність та реєстрація бізнесу" target="_blank"</a>
<img src="img\2.png"> Дозвільна діяльність та реєстрація бізнесу<br>

<a href="services\3.php"title="Судовий спір та виконавче провадження" target="_blank"</a>
<img src="img\3.png"> Судовий спір та виконавче провадження<br>

<a href="services\4.php"title="Сімейні справи" target="_blank"</a>
<img src="img\4.png">Сімейні справи<br>

<a href="services\5.php"title="ДТП" target="_blank"</a>
<img src="img\5.png">ДТП<br>

<a href="services\6.php"title="Земельні та житлові спори" target="_blank"</a>
<img src="img\6.png"> Земельні та житлові спори<br>

<a href="services\7.php"title="Банківські спори" target="_blank"</a>
<img src="img\7.png"> Банківські спори<br>

<a href="services\8.php"title="Сфера інтелектуальної власності" target="_blank"</a>
<img src="img\8.png"> Сфера інтелектуальної власності<br>
</div>
 <?php require "blocks/footer.php" ?> 
</body>
</html>
