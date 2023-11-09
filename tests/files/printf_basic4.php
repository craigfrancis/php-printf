<?php
echo "*** Testing printf() : basic functionality - using bool format ***\n";


// Initialise all required variables
$format = "format";
$format1 = "%b";
$format2 = "%b %b";
$format3 = "%b %b %b";
$arg1 = TRUE;
$arg2 = FALSE;
$arg3 = true;

echo "\n-- Calling printf() with no arguments --\n";
$result = user_printf($format);
echo "\n";
var_dump($result);

echo "\n-- Calling printf() with one arguments--\n";
$result = user_printf($format1, $arg1);
echo "\n";
var_dump($result);

echo "\n-- Calling printf() with two arguments--\n";
$result = user_printf($format2, $arg1, $arg2);
echo "\n";
var_dump($result);

echo "\n-- Calling printf() with three arguments--\n";
$result = user_printf($format3, $arg1, $arg2, $arg3);
echo "\n";
var_dump($result);
?>
