<?php error_reporting(-1);


/*var_dump($price);*/

$light = 'green';

/*if ($light == 'green') {
    echo 'you can go now';
} else {
    echo 'stop';
}*/


// echo ($light == 'green') ? 'you can go now' : 'stop';

$price = 100;

// echo $price ? $price : 'unknow price';
// echo $price ?: 'unknown price';

$test = $price >= 10 ?: 'unknown price';
var_dump($test);












