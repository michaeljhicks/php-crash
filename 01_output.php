<?php 
// echo - output strings, numbers, html...etc 
// echo 123, 'Hello', 10.5;

// print - works like echo, but can only take a single argument
// print 123;

// print_r() - print single values and arrays
// print_r([1,2,3]);

// var_dump() - returns more info like data type and length
// var_dump(true);

// var_export() - similar to var_dump(). Outputs a string representation of a variable
var_export('Hello');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'Post One' ?></h1>    
</body>
</html>