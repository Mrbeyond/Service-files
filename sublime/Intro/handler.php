<?php
	require_once("config.php");



	class intro{
		private $host=host;
		private $user=user_db;
		private $password= password;
		private $db_name=db_name;
		public $konn;
		public $stmt;

		private function  __construct(){

						$this->connect();    }
								
		public function connect(){
				$this->konn= new mysqli($this->host,$this->user,$this->password,$this->db_name);
					if(!$this->konn){
								echo "Unable to connect";
					}		else{
						//echo "Connected";
					}
		}

 		public  function save($username, $fname,$lname,$email,$password){

 			// $this->konn= new mysqli($this->host,$this->user,$this->password,$this->db_name);

 			$this->stmt=$this->konn->prepare("INSERT into signup(username,firstname,lastname,email,password) values(?,?,?,?,?)");

 			$this->stmt->bind_param("sssss", $username,$fname,$lname,$email,$password);

 			if($this->stmt-> execute()){
 				echo "saved";
 			}else{
 				echo "Error!";
 			}



 		}



	}


?>