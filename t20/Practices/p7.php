<?php
// In the name of Allah
// Traning 20 -Practice 7
// Average
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	num1 : 
	<input type="number" name="num1" placeholder="1th number ...">
	<br><br>
	num2 : 
	<input type="number" name="num2" placeholder="2th number ...">
	<br><br>
	<input type="submit" value="Calclute Average">
	<br>
	-------------------------------------------
</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if (isset($_POST['num2']) & isset($_POST['num1']))
	{
		$num1 	= $_POST['num1'];
		$num2 	= $_POST['num2'];	
	}
}
elseif ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	if (isset($_GET['num2']) & isset($_GET['num1']))
	{
		$num1 	= $_GET['num1'];
		$num2 	= $_GET['num2'];
	}
}
if (!empty($num1) & !empty($num1))

	echo "Average(num1,num2) = " . avrg($num1,$num2);

else
	echo "Plz Enter values";


function avrg($_num1,$_num2)
{
	return ($_num1+$_num2)/2;
}

?>