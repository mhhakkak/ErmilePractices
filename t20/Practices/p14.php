<?php
// In the name of Allah
// Traning 20 -Practice 13
// Maghsom a'layhe
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="number" name="num" placeholder="Enter the number">
	<input type="submit" value="Find Maghsom alayhes">
</form>
</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST")
	if(isset($_POST['num']))
		$num = $_POST['num'];

elseif ($_SERVER['REQUEST_METHOD'] == "GET")
	if(isset($_GET['num']))
		$num = $_GET['num'];


if (!empty($num))
{
	echo "<br>Maghsom alayhes :";

	$temp = maghsoms($num);	$e = 0;
	#var_dump($num);
	while (isset($temp[$e]))
	{
		echo '<br>' . $temp[$e];
		$e++;
	}
}
else
	echo "<br>Enter the number ...";

function maghsoms($_num)
{
	$k = 0;
	for ($i=1; $i <= $_num; $i++)
	{
		if ($_num%$i == 0)
		{
			$maghsom[$k] = $i;
			$k++;
		}
	}
	return 	$maghsom;
}

 ?>