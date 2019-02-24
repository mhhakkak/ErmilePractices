<?php

// In the name of Allah
// Traning 18

$arz1 = array("$", "rial", "toman");

echo count($arz1) . "<br/>";

$arz2 = ["dolar" => 35, "toman" => 1, "yen" => 20, "past" => $arz1];

// echo $arz2[0]; /*error
// echo $arz2["past"]["rial"];		/* ??

$stu = 
[
	"Vahid"		=>	['stunum'	=>	8101,	'score'	=>	18],
	"Navid"		=>	['stunum'	=>	8102,	'score'	=>	15],
	"Hmid"		=>	['stunum'	=>	8103,	'score'	=>	10],
	"Rashid"	=>	['stunum'	=>	8104,	'score'	=>	19],
];

foreach ($stu as $key => $value)
{
	echo "<br/>" . $key;
	foreach ($value as $key1 => $value1)
	{
		echo $value1 . "  ";
	}
}

?>