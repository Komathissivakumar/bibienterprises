<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "test";
	private $database = "project";
	private $conn;
	
        function __construct() {
        $this->con = $this->connectDB();
	}	
	function connectDB() {
		$con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
        function runQuery($query) {
                $result = mysqli_query($this->conn,$query);
                while($row=mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
                }		
                if(!empty($resultset))
                return $resultset;
	}
}
?>