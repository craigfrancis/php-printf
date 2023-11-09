<?php
echo "*** Testing sprintf() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing sprintf() function with Zero arguments --\n";
try {
    var_dump( user_sprintf() );
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

echo "\n-- Testing sprintf() function with less than expected no. of arguments --\n";
$format1 = '%s';
$format2 = '%s%s';
$format3 = '%s%s%s';
$arg1 = 'one';
$arg2 = 'two';

// with one argument less than expected
try {
    var_dump( user_sprintf($format1) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( user_sprintf($format2,$arg1) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( user_sprintf($format3,$arg1,$arg2) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

// with two argument less than expected
try {
    var_dump( user_sprintf($format2) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( user_sprintf($format3,$arg1) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

// with three argument less than expected
try {
    var_dump( user_sprintf($format3) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(user_sprintf('%100$d %d'));
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

try {
    var_dump(user_sprintf("foo %", 42));
} catch (ValueError $e) {
    echo $e->getMessage(), "\n";
}

echo "Done";
?>
