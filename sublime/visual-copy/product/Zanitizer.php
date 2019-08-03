<?php
	
	class Zanitizer{
		public function __construct(){}

		public function Cleaner($param){
			if (isset($param)) {
				$param = trim($param);
				$param = stripslashes($param);
				$param = htmlspecialchars($param);
				return $param;
			}
		}

		public function Filtz($item){
			if(isset($item)){
				 $item= filter_var($item, FILTER_SANITIZE_STRING);
				 return	$item;
			}else{
				echo 'item is required';
			}
		}
	}

	// $FF= new Zanitizer;
	// $FF->Filtz(3000);

?>