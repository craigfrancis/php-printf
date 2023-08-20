<?php

$test_script = realpath(__DIR__ . '/tests/run-tests.php');
$test_file = realpath(__DIR__ . '/tests/run-tests.txt');
$functions_file = realpath(__DIR__ . '/functions.php');

passthru('php ' . $test_script . ' --show-diff -d auto_prepend_file=' . $functions_file . ' -r ' . $test_file);

echo "\n";

?>