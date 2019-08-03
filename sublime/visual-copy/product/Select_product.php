<?php
	require_once'connection.php';

	class Selector extends connection{
		public $statementActualiser;
		public $collector;

		public function  Selecter($quantity){
            $this->statementActualiser=$this->DB_connector_var->prepare(" SELECT id, item,price,quantity From product WHERE quantity>? ");
            $this->statementActualiser->bind_param('i', $quantity);
            if($this->statementActualiser->execute()){
            	$this->collector = $this->statementActualiser->get_result()->fetch_all(MYSQLI_ASSOC);
            	// $arr = array();
            	// while ($row = $this->collector->fetch_assoc() ){
            	//     $arr[]=$row;
            	// //     echo json_encode( $row['item']);
            	// }
            	echo json_encode($this->collector);
            	//var_dump($this->collector);
            	// echo json_encode($arr);
            	// 
            }
        }
	}

	header("Access-Control-Allow-Origin: *");
	header("Connection: keep-alive");
	$instance = new Selector;
	$instance->Selecter(0);

	//$data= json_decode(file_get_contents("php://input"));
		/*fetch_fields()*/
		/*$mysqli = new mysqli('localhost','user','password','myDatabaseName');
		$myArray = array();
		if ($result = $mysqli->query("SELECT * FROM phase1")) {

	    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
	            $myArray[] = $row;
	    }
	    echo json_encode($myArray);*/

	   /*
	    $mysqli = new mysqli('localhost','user','password','myDatabaseName');
    $myArray = array();
    if ($result = $mysqli->query("SELECT * FROM phase1")) {
        $tempArray = array();
        while($row = $result->fetch_object()) {
                $tempArray = $row;
                array_push($myArray, $tempArray);
            }
        echo json_encode($myArray);
    }

    $result->close();
    $mysqli->close();
	    */


?>