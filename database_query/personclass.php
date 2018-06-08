<?php
/**
 * 
 * 	@author:	eric phung (esphug@gmail.com)
 * 	@date:		2017-10-30 07:53:12
 *	@purpose:	php person class definition for sql database
 * 	@version 	1.0
 *	notes:		person class model
 */

class Person {
	// member vars
	var $id_num;
    var $username;
    var $password;
    var $firstName;
    var $lastName;
    var $user_list_ids;



    // null constructor
    public function __construct(){}
    public function __destruct(){
    }

	// getters and setters
	function setIdNumber($id_num){
		$this->id_num = $id_num;
	}
	function getIdNumber(){
		return $this->id_num;
	}
	function setUsername($username){
		$this->username = $username;
	}
	function getUsername(){
		return $this->username;
	}

	function setPassword($password){
		$this->password = $password;
	}
	function getPassword(){
		return $this->password;
	}

	function setFirstName($firstName){
		$this->firstName = $firstName;
	}
	function getFirstName(){
		return $this->firstName;
	}

	function setLastName($lastName){
		$this->lastName = $lastName;
	}
	function getLastName(){
		return $this->lastName;
	}
	public function setUserListIds($list){
		$this->user_list_ids = $list;

	}
	public function getUserListIds(){
		return $this->user_list_ids;			
	}

}// end person class def

// admin person class
class Admin extends Person {
	// extend Person constructor
	function __construct(){
		parent::__construct($employee_id);
		$this->employee_id = $employee_id;
		print("\nMade an Admin Person");
   }
}// end admin class def

class User extends Person {
	function __construct($id_num,$username,$password,$firstName,$lastName) {
		$this->id_num = $id_num;
		$this->username = $username;
		$this->password = $password;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		parent::__construct();

		print("\nMade a User Person\n");
		}
}
?>


