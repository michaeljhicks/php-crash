<?php

function registerUser($email) {
    echo $email . ' registered';
}

// registerUser('Brad');

function sum($n1, $n2) {
    return $n1 + $n2;
}

$number = sum(5,5);
echo $number;

?>