<?php
/**
 * filename 	personclass.php
 * @authors		eric phung (esphung@gmail.com)
 * @date 		2017-07-09 21:54:08
 * @purpose		php Person class blueprint
 */


class Person {

	// person properties
	var $firstName;
	var $lastName;


	/* setters and getters */

	/* first name */
	function setFirstName($value='arg'){
		# code...
		$this->firstName = $value;
	}// end set first

	function getFirstName(){
		# code...
		return $this->firstName;
	}// end get first


	public function __construct($value='arg'){
		# code...null constructor
	}

	public function __destruct(){
	}//destructor


}// end person class definition


// create an object
$personObject = new person();

// set object properties
$personObject->setFirstName("foo");
$personObject->lastName = 'bar';


// show object properties
print "First Name:\t\t".	$personObject->getFirstName().	"\n";
print "Last Name:\t\t". 	$personObject->lastName.			"\n";


//make JSON
$myJSON = json_encode($personObject);
echo $myJSON;





