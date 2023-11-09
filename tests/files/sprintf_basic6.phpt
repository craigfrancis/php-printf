--TEST--
Test sprintf() function : basic functionality - exponential format
--FILE--
<?php
echo "*** Testing sprintf() : basic functionality - using exponential format ***\n";

// Initialise all required variables
$format = "format";
$format1 = "%e";
$format2 = "%E %e";
$format3 = "%e %E %e";
$arg1 = 1000;
$arg2 = 2e3;
$arg3 = +3e3;

// Calling user_sprintf() with default arguments
var_dump( user_sprintf($format) );

// Calling user_sprintf() with two arguments
var_dump( user_sprintf($format1, $arg1) );

// Calling user_sprintf() with three arguments
var_dump( user_sprintf($format2, $arg1, $arg2) );

// Calling user_sprintf() with four arguments
var_dump( user_sprintf($format3, $arg1, $arg2, $arg3) );

echo "Done";
?>
--EXPECT--
*** Testing sprintf() : basic functionality - using exponential format ***
string(6) "format"
string(11) "1.000000e+3"
string(23) "1.000000E+3 2.000000e+3"
string(35) "1.000000e+3 2.000000E+3 3.000000e+3"
Done
