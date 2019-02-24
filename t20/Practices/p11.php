<?php
// In the name of Allah
// Traning 20 -Practice 11
// Max & min
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="number" name="n1" placeholder="1th"><br>
	<input type="number" name="n2" placeholder="2th"><br>
	<input type="number" name="n3" placeholder="3th"><br>
	<input type="number" name="n4" placeholder="4th"><br>
	<input type="number" name="n5" placeholder="5th"><br>
	<input type="number" name="n6" placeholder="6th"><br>
	<input type="number" name="n7" placeholder="7th"><br>
	<input type="number" name="n8" placeholder="8th"><br>
	
	<input type="submit" value="Find Max & min number ...">
</form>
</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	for ($i=1; $i <= 8; $i++)
	{
		if(isset($_POST['n'.$i]))
			$n[$i] = $_POST['n'.$i];
	}
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET")
{
	for ($i=1; $i <= 8; $i++)
	{
		if(isset($_GET['n'.$i]))
			$n[$i] = $_GET['n'.$i];
	}
}
for ($j=1; $j <= 8; $j++)
{ 
	if (empty($n[$j]))
	{
		echo "<br>Plz complete all";
		return ;
	}
	$complete = true;
}

if ($complete)
{
	sort($n);
	echo "<br>Max --> " . $n[7];
	echo "<br>min --> " . $n[0];
}

 ?>