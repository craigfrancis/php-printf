--TEST--
Test vprintf() function : usage variations - int formats with non-integer values
--SKIPIF--
<?php
if (PHP_INT_SIZE != 4) die("skip this test is for 32bit platform only");
?>
--FILE--
<?php
/*
 * Test user_vprintf() when different int formats and non-int values are passed to
 * the '$format' and '$args' arguments of the function
*/

echo "*** Testing vprintf() : int formats and non-integer values ***\n";

// defining array of int formats
$formats =
  '%d %+d %-d
   %ld %4d %-4d
   %10.4d %-10.4d %.4d %04.4d
   %\'#2d %\'2d %\'$2d %\'_2d
   %3$d %4$d %1$d %2$d';

// Arrays of non int values for the format defined in $format.
// Each sub array contains non int values which correspond to each format in $format
$args_array = array(

  // array of float values
  array(2.2, .2, 10.2,
        123456.234, -1234.6789, +1234.6789,
        2e10, +2e5, 4e3, 22e+6,
        12345.780, 12.000000011111, -12.00000111111, -123456.234,
        3.33, +4.44, 1.11,-2.22 ),

  // array of strings
  array(" ", ' ', 'hello',
        '123hello', '-123hello', '+123hello',
        "\12345678hello", "-\12345678hello", '0123456hello', 'h123456ello',
        "1234hello", "hello\0world", "NULL", "true",
        "3", "4", '1', '2'),

  // different arrays
  array( array(0), array(1, 2), array(-1, -1),
         array("123"), array('-123'), array("-123"),
         array(true), array(false), array(TRUE), array(FALSE),
         array("123hello"), array("1", "2"), array('123hello'), array(12=>"12twelve"),
         array("3"), array("4"), array("1"), array("2") ),

  // array of boolean data
  array( true, TRUE, false,
         TRUE, FALSE, 1,
         true, false, TRUE, FALSE,
         0, 1, 1, 0,
         1, TRUE, 0, FALSE),

);

// looping to test user_vprintf() with different int formats from the above $format array
// and with non-int values from the above $args_array array
$counter = 1;
foreach($args_array as $args) {
  echo "\n-- Iteration $counter --\n";
  $result = user_vprintf($formats, $args);
  echo "\n";
  var_dump($result);
  $counter++;
}

?>
--EXPECT--
*** Testing vprintf() : int formats and non-integer values ***

-- Iteration 1 --
2 +0 10
   123456 -1234 1234
   -1474836480 200000     4000 22000000
   12345 12 -12 -123456
   10 123456 2 0
int(109)

-- Iteration 2 --
0 +0 0
   123 -123 123 
            0 0          123456 0000
   1234 0 $0 _0
   0 123 0 0
int(89)

-- Iteration 3 --
1 +1 1
   1    1 1   
            1 1          1 0001
   #1 1 $1 _1
   1 1 1 1
int(78)

-- Iteration 4 --
1 +1 0
   1    0 1   
            1 0          1 0000
   #0 1 $1 _0
   0 1 1 1
int(78)
