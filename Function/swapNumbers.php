<?php
// it pass copy if function . to swap 2 no we have to pass them by reference in c and cpp
function swap(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}
$x=5;
$y=6;
swap($x,$y);
echo "x = $x and y = $y";
?>