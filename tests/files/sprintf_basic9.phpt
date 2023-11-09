--TEST--
Test sprintf() function : basic functionality - hexadecimal format
--FILE--
<?php
echo "*** Testing sprintf() : basic functionality - using hexadecimal format ***\n";

// Initialise all required variables

// Initialising different format strings
$format = "format";
$format1 = "%x";
$format2 = "%x %x";
$format3 = "%x %x %x";

$format11 = "%X";
$format22 = "%X %X";
$format33 = "%X %X %X";

$arg1 = 11;
$arg2 = 132;
$arg3 = 177;

// Calling user_sprintf() with default arguments
var_dump( user_sprintf($format) );

// Calling user_sprintf() with two arguments
var_dump( user_sprintf($format1, $arg1) );
var_dump( user_sprintf($format11, $arg1) );

// Calling user_sprintf() with three arguments
var_dump( user_sprintf($format2, $arg1, $arg2) );
var_dump( user_sprintf($format22, $arg1, $arg2) );

// Calling user_sprintf() with four arguments
var_dump( user_sprintf($format3, $arg1, $arg2, $arg3) );
var_dump( user_sprintf($format33, $arg1, $arg2, $arg3) );

echo "Done";
?>
--EXPECT--
*** Testing sprintf() : basic functionality - using hexadecimal format ***
string(6) "format"
string(1) "b"
string(1) "B"
string(4) "b 84"
string(4) "B 84"
string(7) "b 84 b1"
string(7) "B 84 B1"
Done
