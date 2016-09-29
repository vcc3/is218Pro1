<?php

// this prints text in php can also use print as well.
echo "Hello World";
echo '<br>';
// this is how to store value in a variable
echo " Php intro program" ;
echo '<br>';
 $myvar = "Some Text i want to store in a variable";
// this shows the difference between single and double quotes.
echo'$myvar';
echo ' <br> ';
echo "$myvar";
// two types of array. intergers for key, and dictionary for named keys
// this is the example for php arrays
 $myarray = array();
 //$myarray[] is for pushing value into array.
 $myarray[]= 'some value 1';
 $myarray[]= 'some value 2';
 $myarray[]= 'some value 3';
 //print_r is used to view instead objects or arrays only!
 print_r($myarray);
// associative array  with named key
 $myAssoc=  array('value 1' => $myarray, 'value 2' => $myarray);
//example of nested array and Associative array with named keys
print_r($myAssoc);


?>
