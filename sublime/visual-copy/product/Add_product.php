<?php 
	require_once "connection.php";

    class Inserter extends Connection{
        private $statementActualiser;      
        
        public function  Insertion($item,$price,$quantity){
            $this->statementActualiser=$this->DB_connector_var->prepare(" INSERT INTO product(item,price,quantity) VALUES(?,?,?)");
            $this->statementActualiser->bind_param('sii', $item,$price,$quantity);
            if($this->statementActualiser->execute()){
              $_SESSION['success'] = true;
              $_SESSION['successful'] = "The Operation was successful";

             }
            else{
                $this->failed= "Operation failed";
               $_SESSION['failure'] = true;
            }
        }
	}

    
    // echo json_encode($data["item"]);
    

    // echo json_encode('string')    
    // $instance = new Inserter;
    // $instance->Insertion(2,2,3);


 ?>