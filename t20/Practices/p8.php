<?php

// In the name of Allah
// Traning 20 -Practice 8
// Squar drawing
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="number" name="a" placeholder="Enter Squar side's length">
	<br>
	<input type="text" name="char" placeholder="Draw character">
	<br>
	fill <input type="radio" name="mode" value="fill">
	border <input type="radio" name="mode" value="border" checked>
	<input type="submit" value="Draw">
</form>
</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(isset($_POST['a']) & isset($_POST['char']) & isset($_POST['mode']))
	{
		$a = $_POST['a'];
		$char = $_POST['char'];
		$mode = $_POST['mode'];
	}
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET")
{
	if(isset($_GET['a']) & isset($_GET['char']) & isset($_GET['mode']))
	{
		$a = $_GET['a'];
		$char = $_GET['char'];
		$mode = $_GET['mode'];
	}
}

if (!empty($a) & !empty($char) & !empty($mode))
{
	if (strlen($char) > 1)
	{
		echo "<br>You must enter one character to draw only!";
	}
	else
	{
		var_dump($mode);
		sqrd($a,$mode,$char);
	}
}
else
	echo "<br>Plz enter the values";


function sqrd($_a,$_mode,$_char)
{
	echo "<br><pre>";
	for ($i=1; $i <= $_a; $i++)
	{ 
		for ($j=1; $j <= $_a; $j++)
		{ 
			if ($_mode == "border")
			{
				if ($i == 1 || $i == $_a || $j == 1 || $j == $_a)
					echo $_char;
				else
					echo " ";
			}
			else
				echo $_char;
		}
		echo "<br>";
	}
	echo "</pre>";
}

 ?>