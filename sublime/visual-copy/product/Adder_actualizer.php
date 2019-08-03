<?php 
	require_once "Add_product.php";
	require_once 'Inspect.php';
	require_once 'Zanitizer.php';

	// header("Access-Control-Allow-Origin: *");
 //    header("Connection: keep-alive");
 //    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
 //    header("Access-Control-Allow-Headers: X-Rquested-With, Origin, Content-Type, Cookie, Accept");
 //    $data= json_decode(file_get_contents("php://input"), true);

	class Security extends Inserter{

		private $Item, $Price, $Quantity;
		public $DATA;

		public function Sanitizer($A, $B, $C){	

			$this->Item = Zanitizer::Filtz($A);
			$this->Item=Zanitizer::Cleaner($this->Item);				
	        $this->Price=Zanitizer::Filtz($B);
	        $this->Price=Zanitizer::Cleaner($this->Price);
	        $this->Quantity= Zanitizer::Filtz($C);
	        $this->Quantity=Zanitizer::Cleaner($this->Quantity);

	        // INSPECT CLASS FOR THE VERIFICATION
	        Inspect::Collector($this->Item);
	        if(isset($_SESSION['item_exists'])){
	        	echo "existed";
	        	unset($_SESSION['item_exists']);
	        }else{
	        	if(isset($_SESSION['new_item'])){
			    	$this->Insertion($this->Item, $this->Price, $this->Quantity);
			    	if(isset($_SESSION['success'])){
			    		$this->DATA = $_SESSION['successful'];
			    		echo "successful";
			    		unset($_SESSION['new_item']);
			    		unset($_SESSION['success']);
			    		unset($_SESSION['successful']);
			    	}
	        	}		        
		    }
		}		
	}

	$sectance= new Security;
	$sectance->Sanitizer("Pot", 3200, 3); 
	// echo $sectance->DATA ;
	// echo  json_encode($sectance->DATA);
	
 ?>