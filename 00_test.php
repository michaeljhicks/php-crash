<?php

$numbers = range(1, 20);

$new_numbers = array_map(function($number) {
    return "Number $number";
}, $numbers);

$less_thank_10 = array_filter($numbers, fn($number) => $number < 11);
// print_r($less_thank_10);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
print_r($sum);

?>