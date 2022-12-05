<?php

/*
 * Description: Find & Check prime number
 */

//Example 01: Find primary numbers.

$primaryCheckTo = 100; // Check prime number from 1 to 100

for ($i = 1; $i <= $primaryCheckTo; $i++) {

    $counter = 0;

    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $counter++;
        }
    }

    // prime requires 2 rules (divisible by 1 and divisible by itself)
    if ($counter == 2) {
        print $i . " is Prime <br/>";
    }
}

//Example 02: Check Is it prime or not

$checkPrime = 31;
$counter = 0;
for ($j = 1; $j <= $checkPrime; $j++) {
    if ($checkPrime % $j == 0) { // all divisible factors
        $counter++;
    }
}

if ($counter == 2) {
    print "$checkPrime this is a prime number";
}
