<?php

// In the name of Allah
// Traning 20 - Practice 4
// Powers 1 - 3 with crossing
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	NUM: 
	<input type="number" name="num" placeholder="Enter a num to calclute Powers 1-3">
	POW:
	<input type="number" name="pow" placeholder=">= 0 nums only!">
	<input type="submit" value="Calclute">
</form>
</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	if (isset($_POST['num'], $_POST['pow']))
	{
		$num = $_POST['num'];
		$pow = $_POST['pow'];
	}
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET")
{
	if (isset($_GET['num'], $_GET['pow']))
	{
		$num = $_GET['num'];
		$pow = $_GET['pow'];
	}
}


if (!empty($num) & !empty($pow))
{
	if ($pow < 0)
		echo "<br>Enter 0 or positive num for power";
	else
	{
		for ($i=0; $i <= $pow; $i++)
		{ 
			echo "<br>".$num."^".$i." --> ".pwr($num,$i);
		}
	}
}
else
	echo("<br>Plz enter nums completely");


function pwr($_num,$_pow)
{
	$_n = 1;

	if ($_pow < 0)
	{
		$_pow = -$_pow;
		$_num = 1/$_num;
	}

	for ($i=0; $i < $_pow; $i++)
		$_n *= $_num;

	return $_n;
}

?>