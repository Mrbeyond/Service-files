<?php
  // require_once("visit.php");

     if(isset($_POST['$usrled'])){
         $naming =$_POST['$usrled'] ;}
         else{echo "error from the table";}
         $naming =$_POST['$usrled'] ;
       

     class deleter {
            public $dell;
            public function erase(){
                $this->dell= mysqli_query( mysqli_connect("localhost", "root", "", "visual"), "DELETE from signup where username='$naming'");
                if(!$this->dell){
                    echo "Unable to delete, check your codes please!!!";
                }else{
                    echo"Deleted";             }

            }


        }
      
    
     $ease = new deleter;
     $ease->erase();

?>