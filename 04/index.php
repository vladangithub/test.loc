<?php

error_reporting(-1); // Показывает все ошибки

$title = 'Урок 4!';
$winnie_the_pooh = "Hello I'm Winnie. \"Строка в кавычках\"";

$fruit = 'orange';
$winnie_the_pooh ="Hello I am Winnie. I have 2 {$fruit}s";

$var = 'Test 1';
$Var = 'Test 2';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<?php $title = 'Урок 4'; ?>
<h1><?php echo $title ?></h1>
<p><?= $winnie_the_pooh ?></p>

<?php

//var_dump($var);
//var_dump($Var);

var_dump($var, $Var);

//echo $Var;

?>




</body>
</html>


