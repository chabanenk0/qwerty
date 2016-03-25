<!DOCTYPE html>
<html>


<head>

    <head>
        <meta charset="utf-8">
        <title>Подключение внешних стилей</title>
        <!-- подключите внешние стили -->
    </head>
	<style>
  body { background: url(mn.jpg); }
</style>
    <body>
<?php
include 'header.php';
?>

<form method="post" action="register.php">
<p align="center"> <font size="7" face="Elephant">Реєстрація:</font></p>
 <table>
 <tr>
<td><label for = "name2" > <font size="5"> Прізвище</font></td>  
<td><input type="text" id="name2" name="last_name" placeholder = "Прізвище"> </td>  </tr><br>
 <tr>
<td><label for = "name3"> <font size="5">Ім’я </font> </td>
<td><input type = "text" id="name3" name="first_name" placeholder = "Ім’я"> </td> </tr><br>
<tr>
<td><label for = "name4"> <font size="5">По-батькові</font> </td> 
<td><input type = "text" id="name4" name="fathers_name" placeholder = "по-батькові"></td> </tr> <br>
<tr>
<td><label for = "name5"> <font size="5">Номер телефону</font> </td>
<td><input type = "text" id="name5" name="telephone" placeholder = "+380 -- -- -- ---"> </td> </tr><br>
<tr>
<td><label for = "name6"> <font size="5">Населений пункт</font> </td> 
<td><input type = "text" id="name6" name="city" placeholder = "Місто"> </td> </tr><br>
<label for = "name7"> <font size="5">Стать:</font> <br>  
<input type = "radio" name="gender" value="male" id="gender-male"></input>
<label for="gender-male"> <font size="4">Чоловіча</font> </label><br>
<input type = "radio" name="gender" value="female" id="gender-female"></input>
<label for="gender-female"> <font size="4">Жіноча</font> </label><br>
<tr>
<td><input type = "submit" name = "submit" value = "Отправить"></input>
<td><input type = "reset" name = "reset" value = "Очистити"></input></td> </tr><br><br>
<tr>
<td><p align="right"> <a href="pokupka1.php"><font size="5" color = "red">Перейти до замовлення</font></a></p></td> </tr>

</form>   
 </body>
</html>
