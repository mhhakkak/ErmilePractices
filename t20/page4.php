<?php
//In the name of Allah
// Traning 20.1 >> page1

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