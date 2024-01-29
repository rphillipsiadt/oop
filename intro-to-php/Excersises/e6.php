<?php
function inArray($array_b,$x) {
    if (in_array($x,$array_b)) {
        return "$x is in the array";
    }
    return "$x is not in the array";
}
echo inArray([3,6,1,75,23,3,6,3,4,5,16],5);