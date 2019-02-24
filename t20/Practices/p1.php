<?php

// In the name of Allah
// Traning 20 - Practice 1
// Diameter & Area & Circle

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="GET">

	Radial: <input type="number" name="radial" placeholder="plz Enter radial" value="">
	<input type="submit" value="compute">

</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	$GLOBALS['radial'] = $_POST['radial'];

	if (empty($radial))
	{
		echo "plz Enter!";
	}
	else
	{
		echo "DIAMETER: "		. diameter($radial)	. "<br/>";
		echo "AREA:     "		. area($radial)		. "<br/>";
		echo "CIRCLE:   "		. circle($radial)	. "<br/>";		
	}

}
elseif ($_SERVER['REQUEST_METHOD'] == "GET" & isset($_GET['radial']))
{
	$radial = $_GET['radial'];

	if (empty($radial))
	{
		echo "plz Enter!";
	}
	else
	{
		echo "DIAMETER: "		. diameter($radial)	. "<br/>";
		echo "AREA:     "		. area($radial)		. "<br/>";
		echo "CIRCLE:   "		. circle($radial)	. "<br/>";	
	}
}

function diameter($_radial)
{
	return 2*$_radial;
}

function area($_radial)
{
	return 3.1415*$_radial^2;
}

function circle($_radial)
{
	return 2*3.1415*$_radial;
}
?>