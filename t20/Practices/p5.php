<?php
// In the name of Allah
// Traning 20 - Practice 5
// Cross & Power
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	x: 
	<input type="number" name="x" placeholder="First length Triangle...">
	<br/><br/> y:
	<input type="number" name="y" placeholder="Secound length Triangle...">
	<br/><br/> z: 
	<input type="number" name="z" placeholder="Third length Triangle...">
	<br/><br/>
	<input type="submit" value="x ^ y + z =">
	<br>
	~~~~~~~~~~~~~~~~~~~~~~
</form>
</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

	if (isset($_POST['x']) & isset($_POST['y']) & isset($_POST['z']))
	{
		$x 	= $_POST['x'];
		$y 	= $_POST['y'];
		$z	= $_POST['z'];	
	}
}
elseif ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	if (isset($_GET['x']) & isset($_GET['y']) & isset($_GET['z']))
	{
		$x	= $_GET['x'];
		$y 	= $_GET['y'];
		$z	= $_GET['z'];
	}

}
if (!empty($x) & !empty($y) & !empty($z))
{
	echo pwr($x,$y) + $z;
}
else
	echo "Plz Enter values";


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