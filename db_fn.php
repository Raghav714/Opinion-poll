<?php
class Opi_poll {
	public function __construct(){
		$username = "root";
		$password = "";
		$dbname = "poll";
		$this->conn = new mysqli($servername, $username, $password,$dbname);
		if (!$this->conn) die("Unable to connect to MySQL: ".mysqli_error());
	}
	public function connection(){
		return $this->conn;
		}
	public function execute($sql_st){
		return mysqli_query($this->conn,$sql_st);
		}
	public function count_rows(){
		$sql_stmt = "SELECT * FROM author_poll;";
    		$choices_count = mysqli_query($this->conn,$sql_stmt);
		return mysqli_num_rows($choices_count);
		}	
	public function close(){
		mysqli_close($this->conn);	
	}
}
?>
