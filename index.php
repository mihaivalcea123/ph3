<?php

// Calculati cat la suta din 500 reprezinta numarul 125

$number = 500;
$number2 = 125;
$procent = "%";
$rezult = ($number2*100)/$number;
echo "Cat la suta din $number reprezinta numarul $number2 este: ".$rezult.$procent;

echo "<br>";
// Conversia din Celsius in Fahrenheit F=(C*1.8)+32

$grade_celsius = 10;
$fahre_grade = ($grade_celsius*1.8)+32;
echo "$grade_celsius grade in Fahrenheit sunt: ".$fahre_grade. " grade in Celsius"."<br>";

echo "<br>";
// calcularea "2023"+"douamidouazecisitrei"+"36star3"= ?

$string1 = "2023";
$string2= "douamidouazecisitrei";
$string3 = "36star3";

$string = $string1. " + " .$string2. " + ".$string3;
echo $string;

// Calculul folosind variabile
// EX1
$a = 5;
$b= 2;
$c = 3;
$r = (($a+$b)+($b+$c));
echo "Rezultatul este ".$r."<br>";

//Ex2
$a = 5;
$b= 2;
$c = 3;
$d = 1;
$r = ($d+($a+$b)+($b+$c));
echo "Rezultatul este ".$r."<br>";

// Ex3

$a = 5;
$b= 2;
$c = 3;
$d = 1;
$r = $b*($c+$a);
echo "Rezultatul este ".$r."<br>";

//Ex4
$a = 5;
$b= 2;
$c = 3;
$d = 1;
$r = ($b*$c)+$a;
echo "Rezultatul este ".$r."<br>";

//Ex5
$a = 5;
$b= 2;
$c = 3;
$d = 1;
$r = pow($b,$c);
echo "Rezultatul este ".$r."<br>";

//Ex6
$a = 5;
$b= 2;
$c = 3;
$d = 1;
$r = $b*pow($b,$c)+$b;
echo "Rezultatul este ".$r."<br>";

//Ex6
$a = 10;
$b= 2;
$c = 3;
$r = ($a*$b)+($c%$b);
echo "Rezultatul este ".$r."<br>";
//Ex6
$a = 10;
$b= 2;
$c = 3;
$r = number_format(($a*pow($b,$c)+pow($b,$c)+($c+$b)));
echo "Rezultatul este ".$r."<br>";

//Ex6
$a = 4.10;
$result = number_format($a);
echo "Rezultatul dupa formatare este ".$result."<br>";

//Stringuri

$name= "Mihai";
echo "Numele meu este: ".$name."<br>";

// Adaugam 2 variabile si folosim simbolul.=

$text1="Salut";
$text2 = "Mihai";

echo $text1.=$text2."<br>";

// Varianta 2 dar folosim decat punct "."

$text1 = "Salut";
$text2 = "Cristian";

echo $text1. " ".$text2."<br>";

// Utilizarea Heredoc



echo <<< TEXT
Sa invatam PHP
TEXT;

echo "<br>";
//Newdoc

echo <<< "TEXT"
Sa invatam PHP,Java,SQL
TEXT;

echo "<br>";
// array asociativ

$phone = array(
    'id'=>1,
    'name'=>'Samsung',
    'country'=>'Japonia'
);

$result = $phone['name'];
echo "Produsul este" .$result."<br>";

// Array indexat

//lista de electronice

$list = array("SAmsung","Nokia","Electrolux");

// afisam lista in detaliu

echo "<pre>";
echo var_dump($list);
echo "<pre>";

// Array in array

$electronics = array(
    array('phone' => 'Nokia'),
    array('country'=>'Japan'),
    array('products'=>'Japan','sub_array'=>array('Model'=>110)),
);

echo $electronics[2]['products'];
echo $electronics[2]['sub_array']['Model'];

// adaugarea unei valori in array

$electronics['phone'][0]="Samsung";
echo "<pre>";
echo var_dump($electronics);
echo "<pre>";

