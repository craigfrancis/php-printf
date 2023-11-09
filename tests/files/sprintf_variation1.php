<?php
/*
* Testing user_sprintf() : with different unexpected values for format argument other than the strings
*/

echo "*** Testing sprintf() : with unexpected values for format argument ***\n";

// initialing required variables
$arg1 = "second arg";
$arg2 = "third arg";

// declaring class
class sample
{
  public function __toString() {
    return "Object";
  }
}

// creating a file resource
$file_handle = fopen(__FILE__, 'r');

//array of values to iterate over
$values = array(

      // int data
      0,
      1,
      12345,
      -2345,

      // float data
      10.5,
      -10.5,
      10.1234567e10,
      10.7654321E-10,
      .5,

      // array data
      array(),
      array(0),
      array(1),
      array(1, 2),
      array('color' => 'red', 'item' => 'pen'),

      // boolean data
      true,
      false,
      TRUE,
      FALSE,

      // empty data
      "",
      '',

      // object data
      new sample(),

      // resource data
      $file_handle
);

// loop through each element of the array for format

$count = 1;
foreach($values as $value) {
  echo "\n-- Iteration $count --\n";

  // with default argument
  try {
    var_dump(user_sprintf($value));
  } catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
  }

  // with two arguments
  try {
    var_dump(user_sprintf($value, $arg1));
  } catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
  }

  // with three arguments
  try {
    var_dump(user_sprintf($value, $arg1, $arg2));
  } catch (TypeError $exception) {
    echo $exception->getMessage() . "\n";
  }

  $count++;
}

// close the resource
fclose($file_handle);

echo "Done";
?>
