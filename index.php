<?php

// this prints text in php can also use print as well.
echo "Hello World";
echo '<br>';
// this is how to store value in a variable
echo " Php intro program" ;
echo '<br>';
 $myvar = "Some Text i want to store in a variable";
// this shows the difference between single and double quotes.
echo'$r';
echo ' <br> ';
echo "$myvar ";


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
 $myAssoc=  array('Part 1' => $myarray, 'Part  2' => $myarray);
//example of nested array and Associative array with named keys
print_r($myAssoc);



// this is how to read the key you want to access.
 print_r($myAssoc['value 1']);
  // This is how you find a class in php.
  // a class is the blueprint or schematic of an object.
  // the object is the created/instantiated class.
  // instantiate is taking blueprint and making an object.
	 class myclass {// this is a schematic
	 public $myPublic;// can be accessed outside of class.external to pass
	 //variables
	 private $myPrivate;//only inside the class onyl myclass can access
	 protected $myProtected;//inbtween public and private accessed within
	 //classes and subclasses. once instanitated, liek two clases extended
	 //Three different properties with scopes.


	//construct is a method,magic method it does something
	 public function __construct() {
	 // $this is interal reference to object in class. arrow points to  objects and set values
	 $this->myPublic    =1;
	 $this->myPrivate   =2;
	 $this->myProtected =3;
	 //this is how you call a method in a object and pass a value.() inside is the value
	 $this->sayHello('Victor');
			}
			public function sayHello($name){
		//$name is  value we pass into it.
			echo 'Hello' . $name;
							
							
							}

   		}
  		 $obj = new myclass;
		print_r($obj);
//property is variable in a class




 $myarray = array();
  //this is how you add values to an array
  $myarray[] = 'some value 1';
  $myarray[] = 'some value 2';
  $myarray[] = 'some value 3';
  //print_r($myarray);
  //this is an example of an associative array and a nested array
  $myAssoc['value1'] = array ('LinkName' => 'NJIT', 'URL' => 'www.njit.edu');
  $myAssoc['value2'] = array ('LinkName'=> 'Facebook', 'URL' => 'www.facebook.com');
  $myAssoc['value3'] = array('LinkName' => 'Google', 'URL' => 'www.google.com');
  //print_r($myAssoc);
  // this is how you print_r / access a array by naming the key you want to access
  //print_r($myAssoc);

  foreach($myAssoc as $link ) {
 //    print_r($link);
    echo '<a href="http://' . $link['URL'] . '">' . $link['LinkName'] . '</a> <br>';
  }

echo '<br>';
 foreach($myAssoc as $link){
   foreach($link as $key =>$value){
   echo $key . ''. $value . "\n";
   }
   }




?>
