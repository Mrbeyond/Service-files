<?php 
   //require_once('delet.php');
    
    $uname= $_POST["user"];
    $pazk= $_POST["password"];

    echo "$uname"."$pazk";

    class checker{
      
     public $dat;
     public $result;
     public $row;
public function connect(){
    $this->dat= mysqli_connect("localhost", "root", "", "visual");
    if(!$this->dat){
        die("Connection error, please try again");}         }
 
    public function getter($nam,$pz){
    $this->result = mysqli_query($this->dat, "SELECT username, firstname, lastname, password from signup where username='DJreal' and lastname='real'");
        if(!$this->result){
            echo "Error in connection, can't fetch any data from the DB";           }
        else{ 
             if(count($this->result)===1){
            echo "<table border='1'> <tr><th>Username</th><th>Firstname</th><th>Lastname</th><th>Password</th><th>Action</th></tr>";
          while( $this->row= mysqli_fetch_assoc($this->result)){
             $usrled=$this->row['username'];   
                echo " <tr> <td>". $usrled."</td><td>".$this->row['firstname']."</td><td>".$this->row['lastname']."</td><td>".$this->row['password']."</td><td><button>Edit</button>&nbsp;&nbsp;"."<button><a method='post' href='delet.php' name=".$usrled.">Delete</a></button></tr>";
            }  
        echo "</table>";
                            }         }
        }    }
    
    $bb=new checker;
    $bb->connect();
    $bb->getter($uname,$pazk);

?>