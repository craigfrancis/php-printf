--TEST--
Test vsprintf() function : basic functionality - hexadecimal format
--FILE--
<?php
echo "*** Testing vsprintf() : basic functionality - using hexadecimal format ***\n";

// Initialising different format strings
$format = "format";
$format1 = "%x";
$format2 = "%x %x";
$format3 = "%x %x %x";

$format11 = "%X";
$format22 = "%X %X";
$format33 = "%X %X %X";

$arg1 = array(11);
$arg2 = array(11,132);
$arg3 = array(11,132,177);

var_dump( user_vsprintf($format1,$arg1) );
var_dump( user_vsprintf($format11,$arg1) );

var_dump( user_vsprintf($format2,$arg2) );
var_dump( user_vsprintf($format22,$arg2) );

var_dump( user_vsprintf($format3,$arg3) );
var_dump( user_vsprintf($format33,$arg3) );

echo "Done";
?>
--EXPECT--
*** Testing vsprintf() : basic functionality - using hexadecimal format ***
string(1) "b"
string(1) "B"
string(4) "b 84"
string(4) "B 84"
string(7) "b 84 b1"
string(7) "B 84 B1"
Done
