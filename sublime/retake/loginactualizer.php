<?php
	require_once 'connection.php';

	if (isset($_SESSION["DB_connector"])) {
		 echo $_SESSION["DB_connector"]."wow";
	}else{
		echo 'false';
	}
?>