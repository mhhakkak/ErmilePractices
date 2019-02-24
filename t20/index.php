<?php

// In the name of Allah
// Traning 20

$x = 1212;
$y = 113;
$w = 23;	//Whereas is't in z's formula, Existe in GLOBALS!

function temp()
{
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

temp();
#var_dump($GLOBALS);
echo '<br><br>';

echo $_SERVER['PHP_SELF'] . '<br>';
echo $_SERVER['SERVER_NAME'] . '<br>';
echo $_SERVER['HTTP_HOST'] . '<br>';
echo $_SERVER['HTTP_REFERER'] . '<br>';
echo $_SERVER['HTTP_USER_AGENT'] . '<br>';
echo $_SERVER['SCRIPT_NAME'] . '<br>';

?>