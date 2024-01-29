<?php
$sum = 0;
$x = rand(10,20);
for ($i=0;$i<=$x;$i++) {
    $sum+=$i;
}
echo "The random number is $x <br>";
echo "The sum of all the numbers between 1 and $x is $sum";