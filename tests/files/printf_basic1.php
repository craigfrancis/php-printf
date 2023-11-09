<?php
echo "*** Testing printf() : basic functionality - using string format ***\n";

// Initialise all required variables
$format = "format";
$format1 = "%s";
$format2 = "%s %s";
$format3 = "%s %s %s";
$arg1 = "arg1 argument";
$arg2 = "arg2 argument";
$arg3 = "arg3 argument";

echo "\n-- Calling printf() with no arguments --\n";
$result = user_printf($format);
echo "\n";
var_dump($result);

echo "\n-- Calling printf() with one arguments --\n";
$result = user_printf($format1, $arg1);
echo "\n";
var_dump($result);

echo "\n-- Calling printf() with two arguments --\n";
$result = user_printf($format2, $arg1, $arg2);
echo "\n";
var_dump($result);


echo "\n-- Calling printf() with string three arguments --\n";
$result = user_printf($format3, $arg1, $arg2, $arg3);
echo "\n";
var_dump($result);

?>
