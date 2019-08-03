<?php 
	require_once 'connection.php';
	
	class Inspect extends connection{

		private $ACTION;
		private $DOER;
		private $GETT;		

		public function Collector($password,$email){
			$this->ACTION = 'SELECT password, email FROM user WHERE password=? AND email=?';
			$this->DOER = $this->DB_connector_var->prepare($this->ACTION);
			$this->DOER->bind_param('ss', $password,$email);
			if($this->DOER->execute()){
				$this->GETT = $this->DOER->get_result()->fetch_assoc();
				if($this->GETT){
					$_SESSION['user_exists'] = true;
				}
				else{
					$_SESSION['new_user'] = true;
				}
			}else{
				echo "error from fetch verification";
			}
		}
	}

	// $RR = new Inspect;
	// $RR->Collector('samsam','sam@gmail.com');

 ?>