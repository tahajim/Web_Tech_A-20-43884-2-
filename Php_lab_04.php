<?php

function sum($num01, $num02) {
    return $num01 + $num02;
}

function factorial($num03) {
    if ($num03 <= 1) {
        return 1;
    } else {
        return $num03 * factorial($num03 - 1);
    }
}

function isPrime($num04) {
    if ($num04 <= 1) {
        return false;
    }

    for ($i = 2; $i < $num04; $i++) {
        if ($num04 % $i == 0) {
            return false;
        }
    }

    return true;
}

echo "Sum of 5 and 7 = " . sum(5, 7) . "<br>";

echo "Factorial of 5 = " . factorial(5) . "<br>";

$number = 13;

if (isPrime($number)) {
    echo "$number is a Prime Number";
} else {
    echo "$number is NOT a Prime Number";
}

?>