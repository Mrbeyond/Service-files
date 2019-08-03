<?php
	require_once 'del1.php';
	class Three extends Two{

		public $three=" from ibadan";

		public function finn(){
			echo $this->fun().$this->three;
			
		}
	}

	//$ttt= new Three;
	//$ttt->finn();



?>