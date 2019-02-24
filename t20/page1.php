<?php
//In the name of Allah
// Traning 20.1 >> page1
?>

<html>
<body>

<form method = "post">
	Name: <input type = "text" name = "fname">
	<input type = "submit">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	#$name = $_REQUEST['fname'];
	$name = $_POST['fname'];
	if (empty($name))
	{
		echo "Plz type the name!";
	}
	else
	{
		echo $name;
	}
}
?>