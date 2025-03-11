<?php
// Lowercase

$x ="HYE";
echo strtolower($x);
echo "\n";

//Replace string 
$a="Hello, hye";
// 1 what we want to replace 2 with replace 3 main string
echo str_replace("hye","hola",$a);
echo "\n";


//reverse

$a="sst";
echo strrev($a);
echo "\n";

// remove whitespace from the beginning or end
$a = " hello , kaise  ho? ";
echo trim($a);
echo "\n";

//slicing string
$a="hello world";
echo substr($a,6,3); // 1 atriing name 2 starting idx 3 no of element u want
echo "\n";

?>