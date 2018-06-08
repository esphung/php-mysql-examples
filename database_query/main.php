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
	return $query;
}

// insert table record
function insertTableRecord($table,$record){
	//print_r(array_filter(get_object_vars($record)));
	$name = $table->getTableName();
	$columns = $table->getTableColumns();
	$values = get_object_vars($record);
	$values = array_filter(get_object_vars($record));



	// make sql query statement
	$query .= "INSERT INTO" ." "."$name" ." ". " ( ";
	// unload properties to statement
	if ( !empty($columns) ) {
	    $query .= implode(", ", $columns);
	}
	$query .= " )";
	$query .= "\n";

	// unload values into statement
	$query .= "VALUES ( ";

	$query .= $record->getIdNumber();

	$query .= ",'".$record->getUsername()."'";
	$query .= ",'".$record->getPassword()."'";
	$query .= ",'".$record->getFirstName()."'";
	$query .= ",'".$record->getLastName()."'";

	$query .= " );";
	$query .= "\n";

	// INSERT INTO PERSONTABLE (id_num, username, password, firstName, lastName)
	// VALUES (123, 'ayeYeah', 'floopy', 'jimmy', 'Mac');
	
	return $query;
}

// find table record
function findTableRecord($table,$record) {
	$query .= "SELECT * FROM ".$table->getTableName()." ";
	$query .= "WHERE id_num = ".$record->getIdNumber().";";
	$query .= "\n";
	return $query;
	
}

// remove table record
function removeTableRecord($table,$record){
	$query .= "DELETE FROM"." ".$table->getTableName()." ";
	$query .= "WHERE id_num = ".$record->getIdNumber().";";
	$query .= "\n";
	return $query;
}

// update table record
function updateTableRecord($table,$record,$property,$value){
	$query .= "UPDATE"." ".$table;
	$query .= "\n";
	$query .= "\nSET ".$property." = '".$value."'";
	$query .= "\n";
	$query .= "\nWHERE ".id_num." = ".$record->getIdNumber().";";
	$query .= "\n";
	return $query;
}

// main testing

include 'tableclass.php';
include 'personclass.php';

// create examples
$table = new Table("PERSONTABLE",["ID_NUM","USERNAME_STRING","PASSWORD_STRING","FIRSTNAME","LASTNAME_STRING"]);
$person = new User(232,"bfoo","superword","foo","bar");



// create table
echo createTable($table);

// insert record
echo insertTableRecord($table,$person);

// find record
echo findTableRecord($table, $person);

// remove record
echo removeTableRecord($table,$person);

?>