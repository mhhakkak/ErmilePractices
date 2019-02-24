<?php
// In the name of Allah
// Traning 20 -Practice 12
// Three Max & min numbers
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
	<input type="number" name="n9" placeholder="9th"><br>
	
	<input type="submit" value="Find Max & min number ...">
</form>
</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	for ($i=0; $i < 9; $i++)
	{
		if(isset($_POST['n'.($i+1)]))
			$n[$i] = $_POST['n'.($i+1)];
	}
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET")
{
	for ($i=0; $i < 9; $i++)
	{
		if(isset($_GET['n'.($i+1)]))
			$n[$i] = $_GET['n'.($i+1)];
	}
}
for ($j=0; $j < 9; $j++)
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
	echo "<br>3 Max nums --> " . $n[6].','.$n[7].','.$n[8];
	echo "<br>3 min nums --> " . $n[0].','.$n[1].','.$n[2];
}

 ?>