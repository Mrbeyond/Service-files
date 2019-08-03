<?php 
	require_once "connection.php";


    class Inserter extends Connection{
            private $statement;
            private $statementActualiser;

            public function  Insertion($item,$price,$quantity){
                $this->statement=" INSERT into product(item,price,quantity) values(?,?,?)";
                $this->statementActualiser=$this->DB_connector_var->prepare($this->statement);
                $this->statementActualiser->bind_param('sii', $item,$price,$quantity);
                if($this->statementActualiser->execute()){
                    $_SESSION['jnserted']=true;
                    header("location:sale.php");
                 }
                else{
                    $_SESSION['failed insertion']=true;
                    header("location:sale.php");
                }
            }
	}




 ?>