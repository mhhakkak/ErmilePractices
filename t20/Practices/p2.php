<?php
// In the name of Allah
// Traning 20 - Practice 2
// Compart with Minuse & Cross with Plus
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="GET">
	Major : 
	<input type="number" name="major" placeholder="Type ...">
	<br><br>
	minor : 
	<input type="number" name="minor" placeholder="Type ...">
	<br><br>
	Compart
	<input type="radio" name="mathwork" value="compart">
	Cross
	<input type="radio" name="mathwork" value="cross" checked>
	<input type="submit" value="compute!">
	<br>
	-------------------------------------------
</form>
</body>
</html>

<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

	if (isset($_POST['minor']) & isset($_POST['major']) & isset($_POST['mathwork']))
	{
		$major 		= $_POST['major'];
		$minor 		= $_POST['minor'];
		$mathwork 	= $_POST['mathwork'];		
	}
}
elseif ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	if (isset($_GET['minor']) & isset($_GET['major']) & isset($_GET['mathwork']))
	{
		$major 		= $_GET['major'];
		$minor 		= $_GET['minor'];
		$mathwork 	= $_GET['mathwork'];
	}
}

if (!empty($major) & !empty($minor) & !empty($mathwork))
{
	if ($mathwork == "cross")
	{
		echo Cross($major,$minor) . "<br>";
	}
	elseif ($mathwork == "compart")
	{
		echo Compart($major,$minor) . "<br>";
	}
}
else
	echo "Plzz Enter values";

function Compart($_major,$_minor)
{
	$n = 0;
	while ($_major >= $_minor)
	{
		$_major = $_major - $_minor;
		$n++;
	}
	return $n;
}

function Cross($major,$minor)
{
	$n = 0;
	for ($i=0; $i < $minor; $i++)
	{ 
		$n += $major;
	}
	return $n;
}
?>