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

		public function Filt_pass($password){
			if(isset($password)){
				 $password= filter_var($password, FILTER_SANITIZE_STRING);
				 return	$password;
			}else{
				echo 'password is required';
			}
		}

		public function Filt_mail($email){
			if(isset($email)){
				$email= filter_var($email, FILTER_VALIDATE_EMAIL);
				 return $email;	
			}else{
				echo 'email is required';
			}
		}

		public function Filt_Fname($firstname){
			if(isset($firstname)){
				 $firstname= filter_var($firstname, FILTER_SANITIZE_STRING);
				 return	$firstname;
			}else{
				echo 'firstname is required';
			}
		}

		public function Filt_Lname($lastname){
			if(isset($lastname)){
				 $lastname= filter_var($lastname, FILTER_SANITIZE_STRING);
				 return	$lastname;
			}else{
				echo 'lastname is required';
			}
		}

		public function Filt_Uname($username){
			if(isset($username)){
				 $username = filter_var($username, FILTER_SANITIZE_STRING);
				 return $username;
			}else{
				echo 'username is required';
			}
		}

	}

	// $FF= new Zanitizer;
	// $FF->Filt_Lname(' test_form.php/&times;&quot   hy           ;&gt;&lt;script&gt;alert("hacked")&lt;/script&gt;  ');

?>