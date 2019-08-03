<?php 
	require_once "Add_product.php";
	require_once 'Inspect.php';
	require_once 'Zanitizer.php';

	class Security extends Inserter{

		private $item, $price, $quantity;

		public function Sanitizer(){					
			if(isset($_POST['submit'])){			
				
		        $this->price=Zanitizer::Filt_Lname($_POST['Price']);
		        $this->price=Zanitizer::Cleaner($this->price);
				$this->item = Zanitizer::Filt_Uname($_POST['Items']);
				$this->item=Zanitizer::Cleaner($this->item);
		        $this->quantity= Zanitizer::Filt_Fname($_POST['Quantity']);
		        $this->quantity=Zanitizer::Cleaner($this->quantity);
		        // INSPECT CLASS FOR THE VERIFICATION
		        Inspect::Collector($this->item);
		        if(isset($_SESSION['item_exists'])){
		        	header('location: sale.php');
		        }else{
		        	if(isset($_SESSION['new_item'])){
				    $this->Insertion($this->item,$this->price,$this->quantity);
		        	}
		        }
		    }
		}		
	}

	$sectance= new Security;
	$sectance->Sanitizer();
	
 ?>