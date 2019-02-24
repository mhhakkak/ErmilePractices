<?php
// In the name of Allah
// Traning 20 - Practice 6
// Jam'e a'arghame Zowj
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="GET">
	num1 : 
	<input type="number" name="num1" placeholder="1th number ...">
	<br><br>
	num2 : 
	<input type="number" name="num2" placeholder="2th number ...">
	<br><br>
	<input type="submit" value="Jam'e a'arghame Zowj">
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
{
	echo $num1." --> ".zowj($num1).'<br>';
	echo $num2." --> ".zowj($num2).'<br>';
	echo zowj($num1).' + '.zowj($num2)." = ";
	echo zowj($num1)+zowj($num2);
}
else
	echo "Plz Enter values";


function zowj($_num)
{
	$_result = "";
	for ($i=strlen($_num); $i >= 0; $i--)
	{ 
		$n[$i] = ($_num - $_num%pow(10,$i))/pow(10,$i);
		$_num = $_num%pow(10,$i);

		if ($n[$i]%2 == 0 & $n[$i] != 0)
			$_result .= $n[$i];
	}
	return $_result;
}

?>