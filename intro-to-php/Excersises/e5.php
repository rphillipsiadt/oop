<?php
function prime ($x,$n) {
    $divisible = false;
    if ($x%$n == 0) {
        $divisible = true;
        return "$x is divisble by $n";
    }
    return "something else";
}
echo prime(50,5);
?>