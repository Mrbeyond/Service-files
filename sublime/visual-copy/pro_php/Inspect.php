<?php 
	require_once 'connection.php';
	
	class Inspect extends connection{

		private $DOER;
		private $GETT;		

		public function Collector($item){
			$this->DOER = $this->DB_connector_var->prepare('SELECT item FROM product WHERE item=?');
			$this->DOER->bind_param('s', $item);
			if($this->DOER->execute()){
				$this->GETT = $this->DOER->get_result()->fetch_assoc();
				if($this->GETT){
					$_SESSION['item_exists'] = true;
				}
				else{
					$_SESSION['new_item'] = true;
				}
			}else{
				echo "error from fetch verification";
			}
		}
	}

	// $RR = new Inspect;
	// $RR->Collector('samsam','sam@gmail.com');

 ?>