<?php
/*
 * Test user_vprintf() when different unexpected values are passed to
 * the '$args' arguments of the function
*/

echo "*** Testing vprintf() : with unexpected values for args argument ***\n";

// initialising the required variables
$format = '%s';

//get an unset variable
$unset_var = 10;
unset ($unset_var);

// declaring a class
class sample
{
  public function __toString() {
  return "object";
  }
}

// Defining resource
$file_handle = fopen(__FILE__, 'r');


//array of values to iterate over
$values = array(

          // int data
/*1*/	  0,
          1,
          12345,
          -2345,

          // float data
/*5*/	  10.5,
          -10.5,
          10.1234567e10,
          10.7654321E-10,
          .5,

          // null data
/*10*/	  NULL,
          null,

          // boolean data
/*12*/	  true,
          false,
          TRUE,
          FALSE,

          // empty data
/*16*/	  "",
          '',

          // string data
/*18*/	  "string",
          'string',

          // object data
/*20*/	  new sample(),

          // undefined data
/*21*/	  @$undefined_var,

          // unset data
/*22*/	  @$unset_var,

          // resource data
/*23*/		  $file_handle
);

// loop through each element of the array for args
$counter = 1;
foreach($values as $value) {
  echo "\n-- Iteration $counter --\n";
  try {
    $result = user_vprintf($format,$value);
    echo "\n";
    var_dump($result);
  } catch (\TypeError $e) {
    echo $e->getMessage(), "\n";
  } catch (\ValueError $e) {
    echo $e->getMessage(), "\n";
  }
  $counter++;
};

// closing the resource
fclose($file_handle);

?>
