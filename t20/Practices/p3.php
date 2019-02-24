<?php

// In the name of Allah
// Traning 20 - Practice 3
// Triangle creatablity
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	a: 
	<input type="number" name="a" placeholder="First length Triangle...">
	<br/><br/> b:
	<input type="number" name="b" placeholder="Secound length Triangle...">
	<br/><br/> c: 
	<input type="number" name="c" placeholder="Third length Triangle...">
	<br/><br/>
	<input type="submit" value="Is this Triangle creatable?">
	<br>
	~~~~~~~~~~~~~~~~~~~~~~
</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

	if (isset($_POST['a']) & isset($_POST['b']) & isset($_POST['c']))
	{
		$a 	= $_POST['a'];
		$b 	= $_POST['b'];
		$c	= $_POST['c'];

		if (istriangle($a,$b,$c))
		{
			echo("Yes");
		}
		else
			echo("NO!");	
	}
	else
		echo "Plzz Enter values";
}
elseif ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	if (isset($_GET['a']) & isset($_GET['b']) & isset($_GET['c']))
	{
		$a	= $_GET['a'];
		$b 	= $_GET['b'];
		$c	= $_GET['c'];

		if (istriangle($a,$b,$c))
		{
			echo("Yes");
		}
		else
			echo("NO!");
	}
	else
		echo "Plz Enter values";
}


function istriangle($_a,$_b,$_c)
{
	if ($_a+$_b > $_c & $_a+$_c > $_b & $_b+$_c > $_a)
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>