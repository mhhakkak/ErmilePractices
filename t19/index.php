<?php

// In the name of Allah
// Traning 19


$stu = 
[
	"Vahid"		=>	18,
	"Navid"		=>	15,
	"Hmid"		=>	10,
	"Rashid"	=>	19,
];

#sort($stu);	//is chenging the keys to 0 to n
#asort($stu);	//without chenge the keys
#rsort($stu);	//reverce sort whith chenge the keys
#ksort($stu);	//sort the keys
#arsort($stu);
krsort($stu);

foreach ($stu as $key => $value)
{
	echo $key . "	" . $value;
	echo "<br>";
}

?>