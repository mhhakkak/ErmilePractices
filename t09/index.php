<?php

// In the name of Allah
// Traning 9

$x = "Salam Reffigh";

echo strlen($x) . '<br>';
echo str_word_count($x) . "<br>";
print strrev($x) . '<br/>';
echo strpos($x, "s") . "<br>"; // no result
print strpos($x, 'S') . "<br>"; //0
print strpos($x, 'Reff') . "<br>"; //6
var_dump(strpos($x, "s")) . print "<br/>";

// var_dump(str_replace("lam", "LAM", $x)) . echo '<br/>'; //error
var_dump(str_replace("lam", "LAM", $x));


?>