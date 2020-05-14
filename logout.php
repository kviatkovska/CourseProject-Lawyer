<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Вхід</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
 <?php require "blocks/header.php" ?> 
<?php
session_start();
session_destroy();
?>
<div class="inputtext"><h3>Вхід у систему для адвоката:</h3><br>
<?php
echo 'Ви вийшли з кабінету. <a href="/reg.php">Повернутись.</a>';
?>
</div>
</body>
</html>