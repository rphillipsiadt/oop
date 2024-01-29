<?php
$sum = 0;
$x = rand(10,20);
for ($i=0;$i<=$x;$i++) {
    if ($i%3==0 || $i%5==0){
        $sum+=$i;
    }
}
echo "The random number is $x <br>";
echo "The sum of all the numbers that are divisible by 3 or 5 between 1 and $x is $sum";