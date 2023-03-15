<?php

error_reporting(-1);

$bool = true;
$bool2 = false;

//var_dump($bool2);
//
//echo $bool2;
//
//
//var_dump((bool)"");        // bool(false)
//var_dump((bool)"0");       // bool(false)
//var_dump((bool)1);         // bool(true)
//var_dump((bool)-2);        // bool(true)
//var_dump((bool)"foo");     // bool(true)
//var_dump((bool)2.3e5);     // bool(true)
//var_dump((bool)array(12)); // bool(true)
//var_dump((bool)array());   // bool(false)
//var_dump((bool)"false");   // bool(true)
//
//var_dump(0 == 1); // false
//var_dump(0 == (bool)'all'); // false
//var_dump(0 == 'all'); // TRUE, take care
//var_dump(0 === 'all'); // false


//При преобразовании в bool, следующие значения рассматриваются как false:
//
//само значение boolean false
//integer 0 (ноль)
//float 0.0 (ноль) и -0.0 (минус ноль)
//пустая строка "" и строка "0"
//массив без элементов
//особый тип NULL (включая неустановленные переменные)
//внутренние объекты, которые перегружают своё поведение приведения к логическому типу.
//Например: объекты SimpleXML, созданные из пустых элементов без атрибутов.

//var_dump((boolean)0, (bool)"", (bool)123);




// integer

//$int1 = 1;
//$int2 = 0;
//var_dump($int1, $int2);
//var_dump(PHP_INT_MAX);
//var_dump(9223372036854775808);


/*var_dump("10");
var_dump((int)"10"); // числовая строка int 10
var_dump("10Hello"); // string '10Hello' (length=7)
var_dump((int)"10Hello"); // префиксная числовая строка int 10
var_dump((int)"Hello44"); // нечисловая строка приводится int 0
var_dump((int)"Hello");*/

/*var_dump('10' + 20); // int(30)
var_dump("10str" + 20); //int(30)*/

//$float = 1_234.567; // float(1234.567) >= 7.4php

//var_dump($float);

//var_dump(123);
//var_dump((float)123 + 10);

/*var_dump(0.1 + 0.2); // float(0.30000000000000004)
var_dump((0.1 * 10 + 0.2 * 10) / 10); // float(0.3)*/



































