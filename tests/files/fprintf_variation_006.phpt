--TEST--
Test fprintf() function (variation - 6)
--SKIPIF--
<?php
if (PHP_INT_SIZE != 4) die("skip this test is for 32bit platform only");
?>
--FILE--
<?php

$int_numbers = array( 0, 1, -1, 2.7, -2.7, 23333333, -23333333, "1234" );

/* creating dumping file */
$data_file = __DIR__ . '/fprintf_variation_006.txt';
if (!($fp = fopen($data_file, 'wt')))
   return;

/* unsigned int type variation */
user_fprintf($fp, "\n*** Testing fprintf() for unsigned integers ***\n");
foreach( $int_numbers as $unsig_num ) {
  user_fprintf( $fp, "\n");
  user_fprintf( $fp, "%u", $unsig_num );
}

fclose($fp);

print_r(file_get_contents($data_file));
echo "\nDone";

unlink($data_file);

?>
--EXPECT--
*** Testing fprintf() for unsigned integers ***

0
1
4294967295
2
4294967294
23333333
4271633963
1234
Done
