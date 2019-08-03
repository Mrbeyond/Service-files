<?php
	
	class Zanitizer{
		public function __construct(){}

		public function Cleaner($param){
			if (isset($param)) {
				$param = trim($param);
				$param = stripslashes($param);
				$param = htmlspecialchars($param);
				echo $param;
				return $param;
			}
		}

		public function Filt_Fname($item){
			if(isset($item)){
				 $item= filter_var($item, FILTER_SANITIZE_STRING);
				 return	$item;
			}else{
				echo 'item is required';
			}
		}

		public function Filt_Lname($price){
			if(isset($price)){
				 $price= filter_var($price, FILTER_SANITIZE_STRING);
				 return	$price;
			}else{
				echo 'price is required';
			}
		}

		public function Filt_Uname($quantity){
			if(isset($quantity)){
				 $quantity = filter_var($quantity, FILTER_SANITIZE_STRING);
				 return $quantity;
			}else{
				echo 'quantity is required';
			}
		}

	}

	// $FF= new Zanitizer;
	// $FF->Filt_Lname(' test_form.php/&times;&quot   hy           ;&gt;&lt;script&gt;alert("hacked")&lt;/script&gt;  ');

?>