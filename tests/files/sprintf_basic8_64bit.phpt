--TEST--
Test sprintf() function : basic functionality - octal format
--SKIPIF--
<?php if (PHP_INT_SIZE != 8) die("skip this test is for 64bit platform only"); ?>
--FILE--
<?php
echo "*** Testing sprintf() : basic functionality - using octal format ***\n";

// Initialise all required variables
$format = "format";
$format1 = "%o";
$format2 = "%o %o";
$format3 = "%o %o %o";
$arg1 = 021;
$arg2 = -0347;
$arg3 = 0567;

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
*** Testing sprintf() : basic functionality - using octal format ***
string(6) "format"
string(2) "21"
string(25) "21 1777777777777777777431"
string(29) "21 1777777777777777777431 567"
Done
