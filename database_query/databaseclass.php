<?php
/*
Database Class
author:			eric phung
date:			2017.10.30
functionality:	create table,
				display table,
				insert record to table,
				find record in table,
				remove record from table,
				update value for record property in table
*/
class Database {
	// member variables
	var $currentTable;
	var $currentPerson;

	public function __construct(){}
	public function __destruct(){
		// garbage collection
		unset($this->currentTable);
		unset($this->currentPerson);
		//var_dump($this);
	}

	// create new table
	public function setCurrentTable($table) {
		$this->currentTable = $table;
	}
	// get table
	public function getCurrentTable(){
		return $this->currentTable;
	}
	public function setCurrentPerson($person){
		$this->currentPerson = $person;
	}

	public function getCurrentPerson() {
		return $this->currentPerson;
	}
}// end db class def


?>



