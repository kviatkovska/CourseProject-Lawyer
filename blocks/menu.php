<ul class="menu">
  <li><a href="index.php">Головна</a></li>
  <li><a href="services.php">Наші послуги</a></li>
  <li><a href="feedback.php">Подати заявку</a></li>
  <?php require "login.php" ;
 if (! empty($_SESSION['success'])) {
    ?>
	 <li><a href="../employees.php">Кабінет працівника</a></li>  
	 <?php
}
else
{
	?>
		 <li><a href="../employees.php">Для адвоката</a></li>  
<?php
	}
?>
    <li><a href="http://twitter.com" title="Twitter" target="_blank"><img src="../img/twitter.png"></a></li>
  <li><a href="http://facebook.com" title="Facebook" target="_blank"><img src="../img/facebook.png"></a></li>

</ul>