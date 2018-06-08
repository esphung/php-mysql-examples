<?php
// GLOBAL METHODS
function createTable($table){
	$tableName = $table->getTableName();
	$columnLabels = $table->getTableColumns();

	// create table key word with tablename and query
	$query = "CREATE TABLE $tableName";
	// make first item as primary key and remove form list
	$query .= " ( ".$columnLabels[0]." INTEGER PRIMARY KEY";
	unset($columnLabels[0]);// remove id num item
	// unload values to statement
	if (!empty($columnLabels)) {
	    $query .= "," . implode(' VARCHAR(30), ', $columnLabels);
	}
	// end statement punctuation
	$query .= " VARCHAR(30) );\n";

	// garbage collection
	unset($tableName);
	unset($columnLabels);
	unset($table);
	return $query;
}

// insert table record
function insertTableRecord($table,$values){
	$name = $table->getTableName();
	$columns = $table->getTableColumns();
	// make sql query statement
	$query = "INSERT INTO" ." "."$name" ." ". " ( ";
	unset($name);

	// unload properties to statement
	if (!empty($columns)) {
	    $query .= implode(', ', $columns);
	}
	unset($columns);
	$query .= " )\n";

	// unload values into statement
	$query .= "VALUES ( ";
	$query .= " );";


	// INSERT INTO PERSONTABLE (id_num, username, password, firstName, lastName)
	// VALUES (123, 'ayeYeah', 'floopy', 'jimmy', 'Mac');
	return $query;
}

// find person record
function findRecord($table,$recordProperties) {
	$query = "SELECT * FROM ".$table." WHERE id_num = ".$recordProperties[0].";";
	return $query;
	
}

// remove person record
function removeRecord($table,$recordProperties){
	$query = "DELETE FROM"." ".$table." "."\nWHERE id_num = ".$recordProperties[0].";";
	return $query;
}

// update record
function updateRecord($table,$recordProperties,$property,$value){
	$query = "UPDATE"." ".$table.
	"\nSET ".$property." = '".$value."'".
	"\nWHERE ".id_num." = ".$recordProperties[0].";";
	return $query;
}

// main testing
include 'databaseclass.php';
include 'tableclass.php';
include 'personclass.php';

// create example db
$obj = new Database;
$table = new Table("PERSONTABLE",["ID_NUM","USERNAME_STRING","PASSWORD_STRING","FIRSTNAME","LASTNAME_STRING","USER_LIST_IDS","BUSINESS_LIST_IDS","NOTIFICATION_LIST_IDS","DATE_CREATED"]);
$person = new Person;

// set db values
$obj->setCurrentTable($table);
$obj->setCurrentPerson($person);

// console out db object
var_dump($obj);




// create table query
echo createTable($table);

// create insert record query
echo insertTableRecord($obj->getCurrentTable(),$obj->getCurrentPerson());


?>