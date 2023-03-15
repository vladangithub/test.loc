<?php error_reporting(-1);

$min = 60;
$hour = $min * 60;
$day = $hour * 24;
$week = $day * 7 ;
//echo "<p>$hour </p>"  . "<p>$day </p>" . "<p>$week </p>";
var_dump($hour, $day, $week);


$x = 60;
 //var_dump(<p>($x *= 60)</p>  . ($x *= 60*24) . ($x *= 60*24*7));

//var_dump(($x *= 60) . PHP_EOL . ($x *= 24) . PHP_EOL . ($x *= 7));
/*var_dump($x *= 24);
var_dump($x *= 7);
echo "<p>$x *= 60</p>"  . "<p>($x *= 60*24)</p>" . "<p>($x *= 60*24*7)</p>";*/
var_dump($x *= 60);
var_dump($x *= 24);
var_dump($x *= 7);