<?php 
$newname= $_GET['username'];
$fName= $_GET['firstname'];
$lName= $_GET['lastname'];
$pwd= $_GET['pwd'];
$mail= $_GET['mail'];


class Myform{
	public $con;	
	public function connect(){
		$this->con = mysqli_connect("localhost", "root", "", "mydatabase");

		if (!$this->con) {
			die("Connection failed");
		} 		}

	public function register($a,$b,$c,$d,$e){
		mysqli_query($this->con, "INSERT into registration (username, firstname, lastname, password, email) values ('$a', '$b','$c','$d','$e')"); 
	}
 }
$aa = new Myform;
$aa->connect();
$aa->register($newname,$fName,$lName, $pwd,$mail);
?>

