<?php
// In the name of Allah
// Traning 20 -Practice 10
// Triangle drawing modes
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="number" name="a" placeholder="Enter Triangle length">
	<input type="number" name="b" placeholder="Enter Triangle height">
	<br>
	<input type="text" name="char" placeholder="Draw character">
	
	fill <input type="radio" name="mode" value="fill">
	border <input type="radio" name="mode" value="border" checked>
	<input type="submit" value="Draw">
</form>
</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(isset($_POST['a']) & isset($_POST['b']) & isset($_POST['char']) & isset($_POST['mode']))
	{
		$a = $_POST['a'];
		$b = $_POST['b'];
		$char = $_POST['char'];
		$mode = $_POST['mode'];
	}
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET")
{
	if(isset($_GET['a']) &isset($_GET['b']) & isset($_GET['char']) & isset($_GET['mode']))
	{
		$a = $_GET['a'];
		$b = $_GET['b'];
		$char = $_GET['char'];
		$mode = $_GET['mode'];
	}
}

if (!empty($a) || !empty($b) & !empty($char) & !empty($mode))
{
	if (empty($b))
		$b = $a;
	elseif (empty($a))
		$a = $b;

	if (strlen($char) > 1)

		echo "<br>You must enter one character to draw only!";
	else
	{
		rectd($a,$b,$mode,$char,'tr');
		rectd($a,$b,$mode,$char,'bl');
		rectd($a,$b,$mode,$char,'tl');
		rectd($a,$b,$mode,$char,'br');
	}

}
else
	echo "<br>Plz enter the values";

// tl tr bl br top bottom left right

function rectd($_a,$_b,$_mode,$_char,$_shape)
{
	$k = $_a/$_b;
	if ($_shape == 'tl')
	{
		$it = 1;	$jt = 1;	$k *= -1;	$w = $_a;
		echo "<br>top & left";
	}
	elseif ($_shape == 'tr')
	{
		$it = 1;	$jt = $_a;	$k *= +1;	$w = 0;
		echo "<br>top & right";
	}
	elseif ($_shape == 'bl')
	{
		$it = $_b;	$jt = 1;	$k *= +1;	$w = 0;
		echo "<br>bottom & left";
	}
	elseif ($_shape == 'br')
	{
		$it = $_b;	$jt = $_a;	$k *= -1;	$w = $_a;
		echo "<br>bottom & right";
	}

	echo "<br><pre>";
	for ($i=1; $i <= $_b; $i++)
	{ 
		for ($j=1; $j <= $_a; $j++)
		{ 
			if ($_mode == "border")
			{
				if ($i == $it || $j == $jt || $j == $k*$i+$w+($w/$_a))
					echo $_char;
				else
					echo " ";
			}
			elseif ($_mode == "fill")
			{
				if ($_shape == 'tl' || $_shape == 'bl')
				{
					if ($j <= $k*$i+$w+($w/$_a))
						echo $_char;
					else
						echo " ";
				}
				elseif ($_shape == 'tr' || $_shape == 'br')
				{
					if ($j >= $k*$i+$w+($w/$_a))
						echo $_char;
					else
						echo " ";
				}
			}
		}
		echo "<br>";
	}
	echo "</pre>";
}

 ?>