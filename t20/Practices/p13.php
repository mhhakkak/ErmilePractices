<?php
// In the name of Allah
// Traning 20 -Practice 13
// Drawing Diamond
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="number" name="a" placeholder="Enter Rectangle length">
	<input type="number" name="b" placeholder="Enter Rectangle height">
	<br>
	<input type="number" name="x" placeholder="x position">
	<input type="number" name="y" placeholder="y position">
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
	if (isset($_POST['x']) && isset($_POST['y']))
	{
		$x = $_POST['x'];
		$y = $_POST['y'];
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
	if (isset($_GET['x']) &isset($_GET['y']))
	{
		$x = $_GET['x'];
		$y = $_GET['y'];
	}
}

if ((!empty($a) || !empty($b)) & !empty($char) & !empty($mode) & ((empty($x) & empty($y)) || (!empty($x) & !empty($y)) ))
{
	if (empty($b))
		$b = $a;
	elseif (empty($a))
		$a = $b;

	if (strlen($char) > 1)
		echo "<br>You must enter one character to draw only!";
	elseif($a < 0 || $b < 0 || $x < 0 || $y < 0)
		echo "<br>You must enter positive numbers";
	elseif (empty($x) & empty($y))
		lozy($a,$b,$mode,$char);
	elseif (!empty($x) & !empty($y))
		lozy($a,$b,$mode,$char,$x,$y);
}
else
	echo "<br>Plz enter the values";



function lozy($l,$h,$_mode,$_char,$_x=1,$_y=1)
{
	echo "<pre>";
	for ($i=1; $i <= $_x+$l; $i++)
	{ 
		for ($j=1; $j <= $_y+$h; $j++)
		{
			$j1 = -1 * $h/$l * ($i - ($_x + $l/2)) + $_y;
			$j2 =  1 * $h/$l * ($i - ($_x + $l/2)) + $_y;
			$j3 = -1 * $h/$l * ($i - ($_x + $l/2)) + $_y + $h;
			$j4 =  1 * $h/$l * ($i - ($_x + $l/2)) + $_y + $h;

			if($_mode == "border")
			{
				if ($j == $j1 && $i >= $_x && $j >= $_y || $j == $j2 && $i >= $_x && $j >= $_y || $j == $j3 && $i >= $_x && $j >= $_y || $j == $j4 && $i >= $_x && $j >= $_y)
					print $_char;

				else
					print " ";
			}
			elseif ($_mode == "fill")
			{
				if ($j >= $j1 && $j <= $j4 && $i <= $_y+($h/2) ||  $j <= $j3 && $j >= $j2 && $i >= $_y+($h/2))
					print $_char;

				else
					print " ";				
			}
		}
		print "<br/>";
	}
	echo "<br/></pre>";
}

?>