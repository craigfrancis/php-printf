<?php
echo "*** Testing printf() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing printf() function with Zero arguments --\n";
try {
    var_dump( user_printf() );
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

echo "\n-- Testing printf() function with less than expected no. of arguments --\n";
$format1 = '%s';
$format2 = '%s%s';
$format3 = '%s%s%s';
$arg1 = 'one';
$arg2 = 'two';

echo "\n-- Call printf with one argument less than expected --\n";
try {
    var_dump( user_printf($format1) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( user_printf($format2,$arg1) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( user_printf($format3,$arg1,$arg2) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

echo "\n-- Call printf with two argument less than expected --\n";
try {
    var_dump( user_printf($format2) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}
try {
    var_dump( user_printf($format3,$arg1) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

echo "\n-- Call printf with three argument less than expected --\n";
try {
    var_dump( user_printf($format3) );
} catch (\ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}

?>
