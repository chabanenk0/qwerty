<!DOCTYPE html>
<html>


<head>

    <head>
        <meta charset="utf-8">
        <title>Подключение внешних стилей</title>
        <!-- подключите внешние стили -->
    </head>
	<style>
  body { background: url(zx.jpg); }
</style>
    <body>
	<?php
    include 'header.php';
     ?>

    <form method="post" action="register.php">

<p align="center"> <font size="7" face="Elephant">Замовлення товару</font></p>
<label for = "name9"><font size="5">Ціна за одиницю </font> </label>
<input type="text" id="name9" size="5"><br>
<label for = "name10"><font size="5">Кількість </font></label>
<input type="text" id="name10" size="5"><br>


    <script  LANGUAGE="JavaScript">
	
	function totalPrice()
	{
	var cina = +document.getElementById('name9').value
	var kol = +document.getElementById('name10').value
	document.getElementById('result').value=cina*kol	
	}
	
	 </script>
  
  <br><input type=button value="Розрахувати" onclick=totalPrice()></br>
  <label for = "result"><font size="5">До сплати </font>
  <input type="text" id="result" size="6">
</form>   
 </body>
</html>
