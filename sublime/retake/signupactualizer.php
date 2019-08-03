<?php 
	require_once "signupinserter.php";
	require_once 'Inspect.php';
	require_once 'Zanitizer.php';

	class Security extends Inserter{

		private $UserName, $FirstName, $LastName, $email, $Password;

		public function Sanitizer(){					
			if(isset($_POST['submit'])){			
				
		        $this->FirstName=Zanitizer::Filt_Lname($_POST['lastname']);
		        $this->FirstName=Zanitizer::Cleaner($this->FirstName);
				$this->UserName = Zanitizer::Filt_Uname($_POST['username']);
				$this->UserName=Zanitizer::Cleaner($this->UserName);
		        $this->LastName= Zanitizer::Filt_Fname($_POST['firstname']);
		        $this->LastName=Zanitizer::Cleaner($this->LastName);
		        $this->Email= Zanitizer::Filt_mail($_POST['email']);
		        $this->Email=Zanitizer::Cleaner($this->Email);
		        $this->Password=  Zanitizer::Filt_pass($_POST['password']);
		        $this->Password=Zanitizer::Cleaner($this->Password);
		        // INSPECT CLASS FOR THE VERIFICATION
		        Inspect::Collector($this->Password,$this->Email);
		        if(isset($_SESSION['user_exists'])){
		        	header('location: signup.php');
		        }else{
		        	if(isset($_SESSION['new_user'])){
				    $this->Insertion($this->UserName,$this->FirstName,$this->LastName,$this->Email,$this->Password);
		        	}
		        }
		    }
		}		
	}

	$sectance= new Security;
	$sectance->Sanitizer();
	
 ?>