<?php


$f = 1.23456789012345678;
$fx = 1.23456789012345678e100;
var_dump($f, $fx);

user_printf("%.*f\n", 10, $f);
user_printf("%.*G\n", 10, $f);
user_printf("%.*g\n", -1, $fx);
user_printf("%.*G\n", -1, $fx);
user_printf("%.*h\n", -1, $fx);
user_printf("%.*H\n", -1, $fx);
user_printf("%.*s\n", 3, "foobar");
echo "\n";

user_printf("%*f\n", 10, $f);
user_printf("%*G\n", 10, $f);
user_printf("%*s\n", 10, "foobar");
echo "\n";

user_printf("%*.*f\n", 10, 3, $f);
user_printf("%*.*G\n", 10, 3, $f);
user_printf("%*.*s\n", 10, 3, "foobar");
echo "\n";

user_printf("%1$.*2\$f\n", $f, 10);
user_printf("%.*2\$f\n", $f, 10);
user_printf("%2$.*f\n", 10, $f);
user_printf("%1$*2\$f\n", $f, 10);
user_printf("%*2\$f\n", $f, 10);
user_printf("%2$*f\n", 10, $f);
user_printf("%1$*2$.*3\$f\n", $f, 10, 3);
user_printf("%*2$.*3\$f\n", $f, 10, 3);
user_printf("%3$*.*f\n", 10, 3, $f);
echo "\n";

try {
    user_printf("%.*G\n", "foo", 1.5);
} catch (ValueError $e) {
    echo $e->getMessage(), "\n";
}

try {
    user_printf("%.*G\n", -100, 1.5);
} catch (ValueError $e) {
    echo $e->getMessage(), "\n";
}

try {
    user_printf("%.*s\n", -1, "Foo");
} catch (ValueError $e) {
    echo $e->getMessage(), "\n";
}

try {
    user_printf("%*G\n", -1, $f);
} catch (ValueError $e) {
    echo $e->getMessage(), "\n";
}

?>
