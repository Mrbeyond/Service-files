<?php
	require_once'securepara.php';
	session_start();

	class Connection{

		private $host= host;
		private $user = user;
		private $password = password;
		private $dbName = databasename;
		public $DB_connector_var;

		function __construct(){ 
			$this->DBconnector();		
		}

		public function DBconnector(){
			$this->DB_connector_var = new mysqli($this->host,$this->user,$this->password,$this->dbName);
			if ($this->DB_connector_var){
				$_SESSION["DB_connector"] = true;
			}
			else{
				die("Connection error!");
			}
		}
	}
	// $tt= new Connection;
	// $tt->DBconnector();

?>