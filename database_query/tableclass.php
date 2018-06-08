<?php
/*
author:			eric phung
date:			Tue Oct 31 14:24:45 2017
purpose:		table class file for server database
*/


/**
 * Definition of Table Class
 */
class Table {
	var $tableName;// name of the table
	var $tableColumns;// list of column labels
	var $numberOfColumns;
	// constructor
	public function __construct($name,$labels) {
		// define table values
		$this->tableColumns = $labels;
		$this->tableName = $name;
		$this->numberOfColumns = count($this->tableColumns);
	}
	// destructor
	function __destruct() {
	}

	// methods
	public function getTableName(){
		return $this->tableName;
	}

	public function getTableColumns(){
		return $this->tableColumns;
	}

}// end class def
/**
 * Unit Test for Table Class
 */
class UnitTest extends Table {
	// test harness
    public function __construct(){
        $personTableObj = new Table("PERSONTABLE",["ID_NUM","USERNAME_STRING","PASSWORD_STRING","FIRSTNAME","LASTNAME_STRING","USER_LIST","BUSINESS_LIST","NOTIFICATION_LIST","DATE_CREATED"]);
		$businessTableObj = new Table("BUSINESSTABLE",["ID_NUM","ABBREV_NAME_STRING","FED_TAX_ID_NUM","FULL_NAME_STRING","SITE_URL","USERS_LIST","DATE_CREATED"]);
		$notificationTableObj = new Table("NOTIFICATIONTABLE",["ID_NUM","ABBREV_TITLE_STRING","ABBREV_BODY_STRING","FULL_TITLE_STRING","FULL_BODY_STRING","USERS_LIST","DATE_CREATED"]);

		var_dump($personTableObj);
		var_dump($businessTableObj);
		var_dump($notificationTableObj);
    }
}
// perform test
//$test = new UnitTest()
?>