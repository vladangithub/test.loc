<?php error_reporting(-1);
// https://www.php.net/manual/ru/language.control-structures.php

// echo 'Test 1', 'Test 2', 'Test 3';
// print 'Test 1';
// var_dump(print 'Test');

$light = 'red';

//if ($light == "green")
//    echo 'You can go now'; // true
//if ($light == "red") echo 'You can go now'; //false

/*if ($light == "green"){
    echo 'You can go now';
    } else {
    echo 'Stop';
}*/

if ($light == "green") {
    echo 'You can go now';
} elseif ($light == "yellow") {
    echo 'Get ready';
}  elseif ($light == "red") {
    echo 'Stop';
    if (2 > 3) {
        echo '2 > 3';
    } else {
        echo '2 < 3';
    }
} else {
    echo 'Run';
}


/*if ($light == "yellow"){
    echo 'Get ready';
}
if ($light == "red"){
    echo 'Stop';
}*/

if ($light == "green") {
    echo 'You can go now';
} elseif ($light == "yellow") {
    echo 'Get ready';
}  elseif ($light == "red") {
    echo 'Stop';
    if (2 > 3) {
        echo '2 > 3';
    } else {
        echo '2 < 3';
    }
} else {
    echo 'Run';
}


































