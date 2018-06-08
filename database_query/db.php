<?php

/**
 * summary
 */
class DB{
    /**
     * db connection object
     */
    var $servername = "localhost";
	var $username = "root";
	var $password = "password";

    var $conn;
    public function __construct(){
    	// Create connection
    	$this->conn = new mysqli($this->servername, $this->username, $this->password);

    	// Check connection
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		} 
		echo "Connected successfully";
    }

    public function destruct() {
    	mysql_close($this->conn);
    }
}

?>