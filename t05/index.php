<?php

// In the name of Allah
// Traning 5

function _test()
{
	static $num = 3;
	echo $num . "<br>";
	$num++;
}

for ($i=0; $i <5 ; $i++)
{ 
	_test();
}


var_dump("Very num")
?>