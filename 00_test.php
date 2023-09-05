<?php

$posts = ['First post', 'Second post', 'Third post'];

// for($x = 0; $x < count($posts);$x++) {
//     echo "$posts[$x] <br>";
// }

// foreach($posts as $index => $post) {
//     echo $index . ' - ' . $post . '<br>';
// }

$person = [
    'first_name' => 'Brad', 
    'last_name' => 'Traversy', 
    'email' => 'brad@gmail.com', 
];

foreach($person as $key => $value) {
    echo "$value - $key <br>";
}

?>