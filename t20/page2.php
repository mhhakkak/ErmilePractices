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

if (isset($_GET['score']))
{
	echo $_GET['score'];
}
?>