--TEST--
Test vsprintf() function : basic functionality - integer format
--FILE--
<?php
/*
 *  Testing user_vsprintf() : basic functionality - using integer format
*/

echo "*** Testing vsprintf() : basic functionality - using integer format ***\n";

// Initialise all required variables
$format = "format";
$format1 = "%d";
$format2 = "%d %d";
$format3 = "%d %d %d";
$arg1 = array(111);
$arg2 = array(111,222);
$arg3 = array(111,222,333);

var_dump( user_vsprintf($format1,$arg1) );
var_dump( user_vsprintf($format2,$arg2) );
var_dump( user_vsprintf($format3,$arg3) );

echo "Done";
?>
--EXPECT--
*** Testing vsprintf() : basic functionality - using integer format ***
string(3) "111"
string(7) "111 222"
string(11) "111 222 333"
Done
