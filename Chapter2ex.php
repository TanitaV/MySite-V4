<?php

$myString= "Hello World";
$myBool = true;
$myFloat = 56.78;
$myInt = -123;
define ('FOREVER', "time");
const PERFECT = 100;

echo $myBool;
print "‹br/>";
echo $myFloat;
print "<br/>";
echo $myInt;
print "<br/>";
echo $myString;
print "<br/>";
echo FOREVER;
print "<br/>";
echo PERFECT;

print "<hr/>";

$a = "12";
$b = 9;
$c = $a + $b;
echo $c;

print "<hr/>";

$name = "John";
$favColour = "blue";
$age = 18;
print "Hello! My name is ". $name . ". I am ". $age . "years old";
echo "My favourite colour is ". $favColour;


print "My favourite number is ". 10;


print "<hr/>";


$name = "Comp1230";
$year = date(format: 'Y') ;
$decimal = 123.456;

printf( format: "My first name is %s. The year is %d.
An unsigned value is %u. A float value is %f.
The year in binary is %b. The year in octal is %o.
The year in hex is %x and %X",
    args: $name, _: $year, $decimal,
   $decimal, $year, $year, $year, $year) ;

print "<hr/>";

$num1 = 22;
$num2 = 5;
$result1 = $num1 + $num2;
$result2 = $num1 - $num2;
$result3 = $num1 * $num2;
$result4 = $num1 / $num2;
$result5 = $num1 % $num2;

echo $result1, "<br/>",
$result2, "<br/>",
$result3, "<br/>",
$result4, "<br/>",
$result5;

print "<hr/>";

$num = 10;

print $num++;
print '<br/>';
print $num;
print '<br/>';

print "<hr/>";

$num = 10;
$num += 15; //num = num + 15
print $num;
print '<br/>';

print "<hr/>";

$num = 10;
$num /= 3;
print $num;
print '<br/>';

print "<hr/>";

$num = 10;
$num *= 4;
print $num;
print '<br/>';


print "<hr/>";

$a = -12; $b = 15; $c = 130; $d = 75;
$e = ($a + $b) * ++$c / $d--;
echo "result is : ". $e ."<br/>";

$e = ((++$a + $b) * $c) / $d;
echo "result is : ". $e ."<br/>";

