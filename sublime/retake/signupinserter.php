<?php 
	require_once "connection.php";


    class Inserter extends Connection{
            private $statement;
            private $statementActualiser;

            public function  Insertion($uName,$fName,$lName,$mail,$passkey){
                $this->statement=" INSERT into user(username, firstname,lastname,email,password) values(?,?,?,?,?)";
                $this->statementActualiser=$this->DB_connector_var->prepare($this->statement);
                $this->statementActualiser->bind_param('sssss', $uName,$fName,$lName,$mail,$passkey);
                if($this->statementActualiser->execute()){
                    $_SESSION['succesful_sign_up']=true;
                    header("location:welcome.php");
                 }
                else{
                    $_SESSION['un_Succesful_sign_up']=true;
                    header("location:signup.php");
                }
            }
	}




 ?>