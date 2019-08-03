<?php
	require_once 'connection.php';

	class checkuser extends connection{
		private $Email;
		private  $Password




		public function cleaner($param){
			$param = trim($param);
			$param = stripslashes($param);
			$param = htmlspecialchars($param);
			return $param;
		}


	}
?>