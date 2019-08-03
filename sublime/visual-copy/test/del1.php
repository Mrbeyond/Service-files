<?php

	class One{
		public $one;
		public $two;

		 function __construct(){}
		public function fun(){
			$this->one = "welcome ";
			$this->two = "Mr ade ";
			return $this->one.$this->two;
		}
	}

	class Two extends One{

		public function funy(){

			echo $this->fun();
		}
	}

	$tt= new Two;
	$tt->funy();



?>